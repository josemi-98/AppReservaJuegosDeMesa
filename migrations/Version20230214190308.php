<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214190308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservas ADD juego_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL, ADD mesa_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservas ADD CONSTRAINT FK_AA1DAB0113375255 FOREIGN KEY (juego_id) REFERENCES juego (id)');
        $this->addSql('ALTER TABLE reservas ADD CONSTRAINT FK_AA1DAB01A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservas ADD CONSTRAINT FK_AA1DAB018BDC7AE9 FOREIGN KEY (mesa_id) REFERENCES mesa (id)');
        $this->addSql('CREATE INDEX IDX_AA1DAB0113375255 ON reservas (juego_id)');
        $this->addSql('CREATE INDEX IDX_AA1DAB01A76ED395 ON reservas (user_id)');
        $this->addSql('CREATE INDEX IDX_AA1DAB018BDC7AE9 ON reservas (mesa_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservas DROP FOREIGN KEY FK_AA1DAB0113375255');
        $this->addSql('ALTER TABLE reservas DROP FOREIGN KEY FK_AA1DAB01A76ED395');
        $this->addSql('ALTER TABLE reservas DROP FOREIGN KEY FK_AA1DAB018BDC7AE9');
        $this->addSql('DROP INDEX IDX_AA1DAB0113375255 ON reservas');
        $this->addSql('DROP INDEX IDX_AA1DAB01A76ED395 ON reservas');
        $this->addSql('DROP INDEX IDX_AA1DAB018BDC7AE9 ON reservas');
        $this->addSql('ALTER TABLE reservas DROP juego_id, DROP user_id, DROP mesa_id');
    }
}
