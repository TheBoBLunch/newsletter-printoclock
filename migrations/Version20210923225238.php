<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210923225238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users_categories (users_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_ED98E9FC67B3B43D (users_id), INDEX IDX_ED98E9FCA21214B7 (categories_id), PRIMARY KEY(users_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users_categories ADD CONSTRAINT FK_ED98E9FC67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_categories ADD CONSTRAINT FK_ED98E9FCA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE categories_users');
        $this->addSql('ALTER TABLE newsletters CHANGE title name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE users ADD created_at DATETIME NOT NULL, ADD is_rgpd TINYINT(1) NOT NULL, ADD is_valid TINYINT(1) NOT NULL, DROP added_at, DROP is_rgpd_confirmed, DROP is_email_valid, CHANGE email email VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories_users (categories_id INT NOT NULL, users_id INT NOT NULL, INDEX IDX_1080B0A4A21214B7 (categories_id), INDEX IDX_1080B0A467B3B43D (users_id), PRIMARY KEY(categories_id, users_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE categories_users ADD CONSTRAINT FK_1080B0A467B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categories_users ADD CONSTRAINT FK_1080B0A4A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE users_categories');
        $this->addSql('ALTER TABLE newsletters CHANGE name title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE users ADD added_at DATETIME DEFAULT NULL, ADD is_rgpd_confirmed TINYINT(1) NOT NULL, ADD is_email_valid TINYINT(1) NOT NULL, DROP created_at, DROP is_rgpd, DROP is_valid, CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
