<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220426002609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation_guide CHANGE id_client id_client INT NOT NULL, CHANGE id_admin id_admin INT NOT NULL, CHANGE id_guide id_guide INT NOT NULL, CHANGE nom_guide nom_guide VARCHAR(20) NOT NULL, CHANGE status status TINYINT(1) NOT NULL, CHANGE reclamationdate reclamationdate DATE NOT NULL, CHANGE email email VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE reclamation_localisation ADD fullname VARCHAR(30) NOT NULL, ADD location VARCHAR(20) NOT NULL, ADD email VARCHAR(30) NOT NULL, CHANGE id_client id_client INT NOT NULL, CHANGE id_admin id_admin INT NOT NULL, CHANGE id_localisation id_localisation INT NOT NULL, CHANGE status status TINYINT(1) NOT NULL, CHANGE reclamationdate reclamationdate DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation_guide CHANGE id_client id_client INT DEFAULT NULL, CHANGE id_admin id_admin INT DEFAULT NULL, CHANGE id_guide id_guide INT DEFAULT NULL, CHANGE nom_guide nom_guide VARCHAR(30) NOT NULL, CHANGE status status TINYINT(1) DEFAULT NULL, CHANGE reclamationdate reclamationdate DATE DEFAULT \'CURRENT_TIMESTAMP\', CHANGE email email VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE reclamation_localisation DROP fullname, DROP location, DROP email, CHANGE id_client id_client INT DEFAULT NULL, CHANGE id_admin id_admin INT DEFAULT NULL, CHANGE id_localisation id_localisation INT DEFAULT NULL, CHANGE status status TINYINT(1) DEFAULT NULL, CHANGE reclamationdate reclamationdate DATE DEFAULT \'CURRENT_TIMESTAMP\'');
    }
}
