<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210128071104 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE problem_group (id INT AUTO_INCREMENT NOT NULL, probid INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE problem CHANGE restriction_languages restriction_languages LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\', CHANGE subtask subtask INT DEFAULT NULL, CHANGE task_point task_point LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\', CHANGE problems_group problems_group LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\'');
        $this->addSql('ALTER TABLE judging_run CHANGE task task INT DEFAULT NULL');
        $this->addSql('ALTER TABLE judging CHANGE task_result task_result LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE testcase CHANGE orig_input_filename orig_input_filename VARCHAR(255) DEFAULT NULL COMMENT \'Original basename of the input file.\', CHANGE task task INT DEFAULT NULL');
        $this->addSql('ALTER TABLE scorecache CHANGE all_task_point all_task_point LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE problem_group');
        $this->addSql('ALTER TABLE judging CHANGE task_result task_result LONGTEXT DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE judging_run CHANGE task task INT DEFAULT NULL');
        $this->addSql('ALTER TABLE problem CHANGE restriction_languages restriction_languages LONGTEXT DEFAULT \'\'NULL\'\' COLLATE utf8mb4_unicode_ci COMMENT \'JSON-encoded restrictions(DC2Type:json)\', CHANGE subtask subtask INT DEFAULT NULL, CHANGE task_point task_point LONGTEXT DEFAULT \'\'NULL\'\' COLLATE utf8mb4_unicode_ci COMMENT \'JSON-encoded restrictions(DC2Type:json)\', CHANGE problems_group problems_group LONGTEXT DEFAULT \'\'NULL\'\' COLLATE utf8mb4_unicode_ci COMMENT \'JSON-encoded restrictions(DC2Type:json)\'');
        $this->addSql('ALTER TABLE scorecache CHANGE all_task_point all_task_point LONGTEXT DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE testcase CHANGE orig_input_filename orig_input_filename VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci COMMENT \'Original basename of the input file.\', CHANGE task task INT DEFAULT NULL');
    }
}
