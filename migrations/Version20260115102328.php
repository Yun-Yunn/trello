<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260115102328 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tache (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, status VARCHAR(10) NOT NULL, assignee_id INT NOT NULL, INDEX IDX_9387207559EC7D60 (assignee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_9387207559EC7D60 FOREIGN KEY (assignee_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_9387207559EC7D60');
        $this->addSql('DROP TABLE tache');
    }
}
