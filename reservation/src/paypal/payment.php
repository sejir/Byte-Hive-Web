<?php

namespace App\paypal;

use PayPal\Api\Transaction;

class TransactionFactory
{

    static function fromBasket(Basket $basket, float $vatRate = 0): Transaction
    {
        $list = new \PayPal\Api\ItemList();
        foreach ($basket->getProducts() as $product) {
            $item = (new \PayPal\Api\Item())
                ->setName($product->getName())
                ->setPrice($product->getPrice())
                ->setCurrency('EUR')
                ->setQuantity(1);
            $list->addItem($item);
        }

        $details = (new \PayPal\Api\Details())
            ->setTax($basket->getVatPrice($vatRate))
            ->setSubtotal($basket->getPrice());

        $amount = (new \PayPal\Api\Amount())
            ->setTotal($basket->getPrice() + $basket->getVatPrice($vatRate))
            ->setCurrency("EUR")
            ->setDetails($details);

        return (new \PayPal\Api\Transaction())
            ->setItemList($list)
            ->setDescription('Achat sur monsite.fr')
            ->setAmount($amount)
            ->setCustom('demo-1');
    }

}

#$ids = require('config.php');
$basket = \Grafikart\Basket::fake();

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        #$ids['id'],
        #$ids['secret']
    )
);

$payment = new \PayPal\Api\Payment();
$payment->addTransaction(\Grafikart\TransactionFactory::fromBasket($basket));
$payment->setIntent('sale');
$redirectUrls = (new \PayPal\Api\RedirectUrls())
    ->setReturnUrl('http://localhost:8000/pay.php')
    ->setCancelUrl('http://localhost:8000/index.php');
$payment->setRedirectUrls($redirectUrls);
$payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));

try {
    $payment->create($apiContext);
    header('Location: ' . $payment->getApprovalLink());
} catch (\PayPal\Exception\PayPalConnectionException $e) {
    var_dump(json_decode($e->getData()));
}