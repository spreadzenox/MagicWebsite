<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231108171541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__paquet AS SELECT id, member_id, description FROM paquet');
        $this->addSql('DROP TABLE paquet');
        $this->addSql('CREATE TABLE paquet (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, member_id INTEGER NOT NULL, user_id INTEGER NOT NULL, description VARCHAR(255) NOT NULL, CONSTRAINT FK_D0E9B51A7597D3FE FOREIGN KEY (member_id) REFERENCES member (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_D0E9B51AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO paquet (id, member_id, description) SELECT id, member_id, description FROM __temp__paquet');
        $this->addSql('DROP TABLE __temp__paquet');
        $this->addSql('CREATE INDEX IDX_D0E9B51A7597D3FE ON paquet (member_id)');
        $this->addSql('CREATE INDEX IDX_D0E9B51AA76ED395 ON paquet (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__paquet AS SELECT id, member_id, description FROM paquet');
        $this->addSql('DROP TABLE paquet');
        $this->addSql('CREATE TABLE paquet (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, member_id INTEGER NOT NULL, description VARCHAR(255) NOT NULL, CONSTRAINT FK_D0E9B51A7597D3FE FOREIGN KEY (member_id) REFERENCES member (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO paquet (id, member_id, description) SELECT id, member_id, description FROM __temp__paquet');
        $this->addSql('DROP TABLE __temp__paquet');
        $this->addSql('CREATE INDEX IDX_D0E9B51A7597D3FE ON paquet (member_id)');
    }
}
