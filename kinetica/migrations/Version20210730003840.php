<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210730003840 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, uid_id INT DEFAULT NULL, pid_id INT DEFAULT NULL, content VARCHAR(600) NOT NULL, date DATETIME NOT NULL, INDEX IDX_9474526C534B549B (uid_id), INDEX IDX_9474526C386C528 (pid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, uid_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(6000) NOT NULL, date DATETIME NOT NULL, INDEX IDX_5A8A6C8D534B549B (uid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C534B549B FOREIGN KEY (uid_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C386C528 FOREIGN KEY (pid_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D534B549B FOREIGN KEY (uid_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C386C528');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE post');
    }
}
