<?php
return array(
'name'                 => 'Doctrine Sandbox Migrations',
'table_name'           => 'doctrine_migration_versions_test',
'migrations'           => array(
    "migration1" =>
        array(
            "class" => "Doctrine\\DBAL\\Migrations\\Tests\\Stub\\Version1Test",
            "version" => "Version1Test",
        ),
    "migration2" =>
        array(
            "class" => "Doctrine\\DBAL\\Migrations\\Tests\\Stub\\Version2Test",
            "version" => "Version2Test",
        ),
    "migration3" =>
        array(
            "class" => "Doctrine\\DBAL\\Migrations\\Tests\\Stub\\Version3Test",
            "version" => "Version3Test",
        )
)
);
