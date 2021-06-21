<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210616121955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE usagers (id INT AUTO_INCREMENT NOT NULL, usager_n_carte INT NOT NULL, usager_nom_famille VARCHAR(255) NOT NULL, usager_nom_usage VARCHAR(255) DEFAULT NULL, usager_prenom_1 VARCHAR(255) NOT NULL, usager_prenom_2 VARCHAR(255) DEFAULT NULL, usager_d_naissance DATE DEFAULT NULL, usager_adress_1 VARCHAR(255) NOT NULL, usager_adress_2 VARCHAR(255) DEFAULT NULL, usager_cp INT DEFAULT NULL, usager_ville VARCHAR(255) NOT NULL, usager_date_crea DATETIME NOT NULL, usager_date_modif DATE DEFAULT NULL, usager_date_suppression DATE DEFAULT NULL, usager_date_fin_valid DATE NOT NULL, usager_status_valid VARCHAR(2) NOT NULL, usager_role INT NOT NULL, usager_id_cimetiere INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE usagers');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74 ON users');
    }
}
