<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240920075922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE necessite (id INT AUTO_INCREMENT NOT NULL, necessaire TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE depense ADD necessite_id INT NOT NULL');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT FK_34059757FE1F67D0 FOREIGN KEY (necessite_id) REFERENCES necessite (id)');
        $this->addSql('CREATE INDEX IDX_34059757FE1F67D0 ON depense (necessite_id)');
        $this->addSql('ALTER TABLE revenu CHANGE revenu_user_id revenu_user_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY FK_34059757FE1F67D0');
        $this->addSql('DROP TABLE necessite');
        $this->addSql('DROP INDEX IDX_34059757FE1F67D0 ON depense');
        $this->addSql('ALTER TABLE depense DROP necessite_id');
        $this->addSql('ALTER TABLE revenu CHANGE revenu_user_id revenu_user_id INT NOT NULL');
    }
}
