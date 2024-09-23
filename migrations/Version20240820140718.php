<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240820140718 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE depense (id INT AUTO_INCREMENT NOT NULL, depense_user_id INT NOT NULL, date DATE NOT NULL, motif VARCHAR(255) NOT NULL, montant NUMERIC(10, 2) NOT NULL, INDEX IDX_34059757A2C60F70 (depense_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE revenu (id INT AUTO_INCREMENT NOT NULL, revenu_user_id INT NOT NULL, date_revenu DATE NOT NULL, montant NUMERIC(10, 2) NOT NULL, economie NUMERIC(10, 2) NOT NULL, INDEX IDX_7DA3C045E08C26D4 (revenu_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE depense ADD CONSTRAINT FK_34059757A2C60F70 FOREIGN KEY (depense_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE revenu ADD CONSTRAINT FK_7DA3C045E08C26D4 FOREIGN KEY (revenu_user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE depense DROP FOREIGN KEY FK_34059757A2C60F70');
        $this->addSql('ALTER TABLE revenu DROP FOREIGN KEY FK_7DA3C045E08C26D4');
        $this->addSql('DROP TABLE depense');
        $this->addSql('DROP TABLE revenu');
    }
}
