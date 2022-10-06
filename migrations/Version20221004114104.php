<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221004114104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_64C19C112469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, code VARCHAR(5) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, product_id_id INT NOT NULL, content LONGTEXT NOT NULL, rate INT NOT NULL, INDEX IDX_5F9E962A9D86650F (user_id_id), INDEX IDX_5F9E962ADE18E50B (product_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, name VARCHAR(255) NOT NULL, siret VARCHAR(14) NOT NULL, UNIQUE INDEX UNIQ_4FBF094F9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fields (id INT AUTO_INCREMENT NOT NULL, owner_id_id INT NOT NULL, latitude DOUBLE PRECISION NOT NULL, longitude DOUBLE PRECISION NOT NULL, INDEX IDX_7EE5E3888FDDAB70 (owner_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE locations (id INT AUTO_INCREMENT NOT NULL, tenant_id_id INT NOT NULL, product_id_id INT NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, INDEX IDX_17E64ABA60D47263 (tenant_id_id), UNIQUE INDEX UNIQ_17E64ABADE18E50B (product_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, owner_id_id INT NOT NULL, category_id_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, brand VARCHAR(255) NOT NULL, image1 VARCHAR(255) NOT NULL, image2 VARCHAR(255) DEFAULT NULL, image3 VARCHAR(255) DEFAULT NULL, image4 VARCHAR(255) DEFAULT NULL, image5 VARCHAR(255) DEFAULT NULL, purchase_price DOUBLE PRECISION NOT NULL, location_price DOUBLE PRECISION NOT NULL, caution_price DOUBLE PRECISION NOT NULL, is_published TINYINT(1) NOT NULL, INDEX IDX_B3BA5A5A8FDDAB70 (owner_id_id), INDEX IDX_B3BA5A5A9777D11E (category_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, city_id_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', telephone VARCHAR(15) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D6493CCE3900 (city_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE winegrower (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_19A98A9C9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C112469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962ADE18E50B FOREIGN KEY (product_id_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094F9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE fields ADD CONSTRAINT FK_7EE5E3888FDDAB70 FOREIGN KEY (owner_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE locations ADD CONSTRAINT FK_17E64ABA60D47263 FOREIGN KEY (tenant_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE locations ADD CONSTRAINT FK_17E64ABADE18E50B FOREIGN KEY (product_id_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A8FDDAB70 FOREIGN KEY (owner_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A9777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493CCE3900 FOREIGN KEY (city_id_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE winegrower ADD CONSTRAINT FK_19A98A9C9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C112469DE2');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A9D86650F');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962ADE18E50B');
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094F9D86650F');
        $this->addSql('ALTER TABLE fields DROP FOREIGN KEY FK_7EE5E3888FDDAB70');
        $this->addSql('ALTER TABLE locations DROP FOREIGN KEY FK_17E64ABA60D47263');
        $this->addSql('ALTER TABLE locations DROP FOREIGN KEY FK_17E64ABADE18E50B');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A8FDDAB70');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A9777D11E');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493CCE3900');
        $this->addSql('ALTER TABLE winegrower DROP FOREIGN KEY FK_19A98A9C9D86650F');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE fields');
        $this->addSql('DROP TABLE locations');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE winegrower');
    }
}
