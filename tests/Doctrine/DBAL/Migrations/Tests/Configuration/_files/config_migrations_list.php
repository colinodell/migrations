<?php
return array(
'name'                 => 'Doctrine Sandbox Migrations',
'table_name'           => 'doctrine_migration_versions_test',
'migrations'           => array(
    array(
        "class" => "Doctrine\\DBAL\\Migrations\\Tests\\Stub\\Version1Test",
        "version" => "Version1Test",
    ),
    array(
        "class" => "Doctrine\\DBAL\\Migrations\\Tests\\Stub\\Version2Test",
        "version" => "Version2Test",
    ),
    array(
        "class" => "Doctrine\\DBAL\\Migrations\\Tests\\Stub\\Version3Test",
        "version" => "Version3Test",
    )
)
);
