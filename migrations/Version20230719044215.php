<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230719044215 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE oder_item (id INT AUTO_INCREMENT NOT NULL, o_id INT NOT NULL, item_id INT NOT NULL, quantity INT NOT NULL, price DOUBLE PRECISION NOT NULL, INDEX IDX_2A0A990ADB01246B (o_id), INDEX IDX_2A0A990A126F525E (item_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, customer_name VARCHAR(255) NOT NULL, customer_address VARCHAR(255) NOT NULL, customer_phone VARCHAR(12) NOT NULL, total_price DOUBLE PRECISION NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE oder_item ADD CONSTRAINT FK_2A0A990ADB01246B FOREIGN KEY (o_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE oder_item ADD CONSTRAINT FK_2A0A990A126F525E FOREIGN KEY (item_id) REFERENCES sp (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE oder_item DROP FOREIGN KEY FK_2A0A990ADB01246B');
        $this->addSql('ALTER TABLE oder_item DROP FOREIGN KEY FK_2A0A990A126F525E');
        $this->addSql('DROP TABLE oder_item');
        $this->addSql('DROP TABLE `order`');
    }
}
