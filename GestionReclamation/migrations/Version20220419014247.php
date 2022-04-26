<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220419014247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation_guide ADD full_name VARCHAR(30) NOT NULL, ADD email VARCHAR(50) NOT NULL, CHANGE id_admin id_admin INT NOT NULL, CHANGE reclamationdate reclamationdate DATE NOT NULL');
        $this->addSql('ALTER TABLE reclamation_localisation CHANGE id_admin id_admin INT NOT NULL, CHANGE reclamationdate reclamationdate DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation_guide DROP full_name, DROP email, CHANGE id_admin id_admin INT DEFAULT NULL, CHANGE reclamationdate reclamationdate DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL');
        $this->addSql('ALTER TABLE reclamation_localisation CHANGE id_admin id_admin INT DEFAULT NULL, CHANGE reclamationdate reclamationdate DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL');
    }
}
