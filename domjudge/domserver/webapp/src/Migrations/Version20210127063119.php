<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127063119 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE problem ADD restriction_languages LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\', ADD subtask INT DEFAULT NULL, ADD task_point LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\', ADD problems_group LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\'');
        $this->addSql('ALTER TABLE judging_run ADD task INT DEFAULT NULL');
        $this->addSql('ALTER TABLE judging ADD task_result LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE scorecache ADD all_task_point LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE testcase ADD task INT DEFAULT NULL, CHANGE orig_input_filename orig_input_filename VARCHAR(255) DEFAULT NULL COMMENT \'Original basename of the input file.\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
       
    }
}
