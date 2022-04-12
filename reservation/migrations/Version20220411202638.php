<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220411202638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE louer CHANGE idEquipement idEquipement INT DEFAULT NULL, CHANGE idClient idClient INT DEFAULT NULL');
        $this->addSql('ALTER TABLE upcomingevents DROP FOREIGN KEY fkguide');
        $this->addSql('ALTER TABLE upcomingevents ADD CONSTRAINT FK_248F8A59241B8605 FOREIGN KEY (id_guide) REFERENCES guide (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE louer CHANGE idEquipement idEquipement INT NOT NULL, CHANGE idClient idClient INT NOT NULL');
        $this->addSql('ALTER TABLE upcomingevents DROP FOREIGN KEY FK_248F8A59241B8605');
        $this->addSql('ALTER TABLE upcomingevents ADD CONSTRAINT fkguide FOREIGN KEY (id_guide) REFERENCES guide (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
