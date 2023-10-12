<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230304160717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invitacion_evento ADD evento_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE invitacion_evento ADD CONSTRAINT FK_8C4E018787A5F842 FOREIGN KEY (evento_id) REFERENCES eventos (id)');
        $this->addSql('ALTER TABLE invitacion_evento ADD CONSTRAINT FK_8C4E0187A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8C4E018787A5F842 ON invitacion_evento (evento_id)');
        $this->addSql('CREATE INDEX IDX_8C4E0187A76ED395 ON invitacion_evento (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invitacion_evento DROP FOREIGN KEY FK_8C4E018787A5F842');
        $this->addSql('ALTER TABLE invitacion_evento DROP FOREIGN KEY FK_8C4E0187A76ED395');
        $this->addSql('DROP INDEX IDX_8C4E018787A5F842 ON invitacion_evento');
        $this->addSql('DROP INDEX IDX_8C4E0187A76ED395 ON invitacion_evento');
        $this->addSql('ALTER TABLE invitacion_evento DROP evento_id, DROP user_id');
    }
}
