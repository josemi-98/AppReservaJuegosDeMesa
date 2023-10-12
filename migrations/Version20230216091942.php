<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230216091942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eventos ADD invitacion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE eventos ADD CONSTRAINT FK_6B23BD8F124D8B0 FOREIGN KEY (invitacion_id) REFERENCES invitacion (id)');
        $this->addSql('CREATE INDEX IDX_6B23BD8F124D8B0 ON eventos (invitacion_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eventos DROP FOREIGN KEY FK_6B23BD8F124D8B0');
        $this->addSql('DROP INDEX IDX_6B23BD8F124D8B0 ON eventos');
        $this->addSql('ALTER TABLE eventos DROP invitacion_id');
    }
}
