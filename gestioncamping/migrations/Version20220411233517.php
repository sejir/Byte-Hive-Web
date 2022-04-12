<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220411233517 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE upcomingevents DROP FOREIGN KEY fkguide');
        $this->addSql('DROP INDEX fkguide ON upcomingevents');
        $this->addSql('ALTER TABLE upcomingevents ADD id INT AUTO_INCREMENT NOT NULL, CHANGE event_number event_number INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE upcomingevents MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE upcomingevents DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE upcomingevents DROP id, CHANGE event_number event_number INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE upcomingevents ADD CONSTRAINT fkguide FOREIGN KEY (id_guide) REFERENCES guide (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX fkguide ON upcomingevents (id_guide)');
        $this->addSql('ALTER TABLE upcomingevents ADD PRIMARY KEY (event_number)');
    }
}
