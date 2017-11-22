<?php

namespace Doctrine\DBAL\Migrations\Tests\Stub\Functional;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Type;

class MigrateAddSqlPostAndPreUpAndDownTest extends AbstractMigration
{
    const TABLE_NAME = 'test_add_sql_post_up_table';

    public function preUp(Schema $schema)
    {
        $this->addSql(
            sprintf("INSERT INTO %s (test) values (?)", self::TABLE_NAME),
            array(1)
        );
    }

    public function up(Schema $schema)
    {
        $this->addSql(
            sprintf("INSERT INTO %s (test) values (?)", self::TABLE_NAME),
            array(2)
        );
    }

    public function postUp(Schema $schema)
    {
        $this->addSql(
            sprintf("INSERT INTO %s (test) values (?)", self::TABLE_NAME),
            array(3)
        );
    }

    public function preDown(Schema $schema)
    {
        $this->addSql(
            sprintf("INSERT INTO %s (test) values (?)", self::TABLE_NAME),
            array(4)
        );
    }

    public function down(Schema $schema)
    {
        $this->addSql(
            sprintf("INSERT INTO %s (test) values (?)", self::TABLE_NAME),
            array(5)
        );
    }

    public function postDown(Schema $schema)
    {
        $this->addSql(
            sprintf("INSERT INTO %s (test) values (?)", self::TABLE_NAME),
            array(6)
        );
    }
}
