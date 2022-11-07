<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221021094224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contacto DROP FOREIGN KEY FK_2741493C4E7121AF');
        $this->addSql('DROP INDEX IDX_2741493C4E7121AF ON contacto');
        $this->addSql('ALTER TABLE contacto DROP provincia_id, DROP nombre, DROP telefono, DROP email, CHANGE id id VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE contacto ADD provincia_id INT DEFAULT NULL, ADD nombre VARCHAR(255) NOT NULL, ADD telefono VARCHAR(15) NOT NULL, ADD email VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE contacto ADD CONSTRAINT FK_2741493C4E7121AF FOREIGN KEY (provincia_id) REFERENCES provincia (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_2741493C4E7121AF ON contacto (provincia_id)');
    }
}
