<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230304161813 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE games_events (id INT AUTO_INCREMENT NOT NULL, juego_id INT DEFAULT NULL, eventos_id INT DEFAULT NULL, INDEX IDX_91AFB8FF13375255 (juego_id), INDEX IDX_91AFB8FF7F243861 (eventos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE games_events ADD CONSTRAINT FK_91AFB8FF13375255 FOREIGN KEY (juego_id) REFERENCES juego (id)');
        $this->addSql('ALTER TABLE games_events ADD CONSTRAINT FK_91AFB8FF7F243861 FOREIGN KEY (eventos_id) REFERENCES eventos (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE games_events DROP FOREIGN KEY FK_91AFB8FF13375255');
        $this->addSql('ALTER TABLE games_events DROP FOREIGN KEY FK_91AFB8FF7F243861');
        $this->addSql('DROP TABLE games_events');
    }
}
