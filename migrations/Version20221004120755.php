<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221004120755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A9D86650F');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962ADE18E50B');
        $this->addSql('DROP INDEX IDX_5F9E962A9D86650F ON comments');
        $this->addSql('DROP INDEX IDX_5F9E962ADE18E50B ON comments');
        $this->addSql('ALTER TABLE comments ADD user_id INT NOT NULL, ADD product_id INT NOT NULL, DROP user_id_id, DROP product_id_id');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A4584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_5F9E962AA76ED395 ON comments (user_id)');
        $this->addSql('CREATE INDEX IDX_5F9E962A4584665A ON comments (product_id)');
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094F9D86650F');
        $this->addSql('DROP INDEX UNIQ_4FBF094F9D86650F ON company');
        $this->addSql('ALTER TABLE company CHANGE user_id_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4FBF094FA76ED395 ON company (user_id)');
        $this->addSql('ALTER TABLE fields DROP FOREIGN KEY FK_7EE5E3888FDDAB70');
        $this->addSql('DROP INDEX IDX_7EE5E3888FDDAB70 ON fields');
        $this->addSql('ALTER TABLE fields CHANGE owner_id_id owner_id INT NOT NULL');
        $this->addSql('ALTER TABLE fields ADD CONSTRAINT FK_7EE5E3887E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7EE5E3887E3C61F9 ON fields (owner_id)');
        $this->addSql('ALTER TABLE locations DROP FOREIGN KEY FK_17E64ABADE18E50B');
        $this->addSql('ALTER TABLE locations DROP FOREIGN KEY FK_17E64ABA60D47263');
        $this->addSql('DROP INDEX UNIQ_17E64ABADE18E50B ON locations');
        $this->addSql('DROP INDEX IDX_17E64ABA60D47263 ON locations');
        $this->addSql('ALTER TABLE locations ADD tenant_id INT NOT NULL, ADD product_id INT NOT NULL, DROP tenant_id_id, DROP product_id_id');
        $this->addSql('ALTER TABLE locations ADD CONSTRAINT FK_17E64ABA9033212A FOREIGN KEY (tenant_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE locations ADD CONSTRAINT FK_17E64ABA4584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_17E64ABA9033212A ON locations (tenant_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_17E64ABA4584665A ON locations (product_id)');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A8FDDAB70');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A9777D11E');
        $this->addSql('DROP INDEX IDX_B3BA5A5A9777D11E ON products');
        $this->addSql('DROP INDEX IDX_B3BA5A5A8FDDAB70 ON products');
        $this->addSql('ALTER TABLE products ADD owner_id INT NOT NULL, ADD category_id INT NOT NULL, DROP owner_id_id, DROP category_id_id');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A7E3C61F9 ON products (owner_id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A12469DE2 ON products (category_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493CCE3900');
        $this->addSql('DROP INDEX IDX_8D93D6493CCE3900 ON user');
        $this->addSql('ALTER TABLE user ADD profil_picture VARCHAR(255) NOT NULL, CHANGE city_id_id city_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6498BAC62AF ON user (city_id)');
        $this->addSql('ALTER TABLE winegrower DROP FOREIGN KEY FK_19A98A9C9D86650F');
        $this->addSql('DROP INDEX UNIQ_19A98A9C9D86650F ON winegrower');
        $this->addSql('ALTER TABLE winegrower CHANGE user_id_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE winegrower ADD CONSTRAINT FK_19A98A9CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_19A98A9CA76ED395 ON winegrower (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AA76ED395');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A4584665A');
        $this->addSql('DROP INDEX IDX_5F9E962AA76ED395 ON comments');
        $this->addSql('DROP INDEX IDX_5F9E962A4584665A ON comments');
        $this->addSql('ALTER TABLE comments ADD user_id_id INT NOT NULL, ADD product_id_id INT NOT NULL, DROP user_id, DROP product_id');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962ADE18E50B FOREIGN KEY (product_id_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_5F9E962A9D86650F ON comments (user_id_id)');
        $this->addSql('CREATE INDEX IDX_5F9E962ADE18E50B ON comments (product_id_id)');
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094FA76ED395');
        $this->addSql('DROP INDEX UNIQ_4FBF094FA76ED395 ON company');
        $this->addSql('ALTER TABLE company CHANGE user_id user_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094F9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4FBF094F9D86650F ON company (user_id_id)');
        $this->addSql('ALTER TABLE fields DROP FOREIGN KEY FK_7EE5E3887E3C61F9');
        $this->addSql('DROP INDEX IDX_7EE5E3887E3C61F9 ON fields');
        $this->addSql('ALTER TABLE fields CHANGE owner_id owner_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE fields ADD CONSTRAINT FK_7EE5E3888FDDAB70 FOREIGN KEY (owner_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7EE5E3888FDDAB70 ON fields (owner_id_id)');
        $this->addSql('ALTER TABLE locations DROP FOREIGN KEY FK_17E64ABA9033212A');
        $this->addSql('ALTER TABLE locations DROP FOREIGN KEY FK_17E64ABA4584665A');
        $this->addSql('DROP INDEX IDX_17E64ABA9033212A ON locations');
        $this->addSql('DROP INDEX UNIQ_17E64ABA4584665A ON locations');
        $this->addSql('ALTER TABLE locations ADD tenant_id_id INT NOT NULL, ADD product_id_id INT NOT NULL, DROP tenant_id, DROP product_id');
        $this->addSql('ALTER TABLE locations ADD CONSTRAINT FK_17E64ABADE18E50B FOREIGN KEY (product_id_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE locations ADD CONSTRAINT FK_17E64ABA60D47263 FOREIGN KEY (tenant_id_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_17E64ABADE18E50B ON locations (product_id_id)');
        $this->addSql('CREATE INDEX IDX_17E64ABA60D47263 ON locations (tenant_id_id)');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A7E3C61F9');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A12469DE2');
        $this->addSql('DROP INDEX IDX_B3BA5A5A7E3C61F9 ON products');
        $this->addSql('DROP INDEX IDX_B3BA5A5A12469DE2 ON products');
        $this->addSql('ALTER TABLE products ADD owner_id_id INT NOT NULL, ADD category_id_id INT NOT NULL, DROP owner_id, DROP category_id');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A8FDDAB70 FOREIGN KEY (owner_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A9777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A9777D11E ON products (category_id_id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A8FDDAB70 ON products (owner_id_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498BAC62AF');
        $this->addSql('DROP INDEX IDX_8D93D6498BAC62AF ON user');
        $this->addSql('ALTER TABLE user DROP profil_picture, CHANGE city_id city_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493CCE3900 FOREIGN KEY (city_id_id) REFERENCES city (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6493CCE3900 ON user (city_id_id)');
        $this->addSql('ALTER TABLE winegrower DROP FOREIGN KEY FK_19A98A9CA76ED395');
        $this->addSql('DROP INDEX UNIQ_19A98A9CA76ED395 ON winegrower');
        $this->addSql('ALTER TABLE winegrower CHANGE user_id user_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE winegrower ADD CONSTRAINT FK_19A98A9C9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_19A98A9C9D86650F ON winegrower (user_id_id)');
    }
}
