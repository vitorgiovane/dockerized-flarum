<?php

require_once __DIR__ . '/dotEnv.php';

return array(
  'debug' => false,
  'database' =>
  array(
    'driver' => getEnv("DB_DRIVER"),
    'host' => getEnv("DB_HOST"),
    'port' => getEnv("DB_PORT"),
    'database' => getEnv("DB_DATABASE"),
    'username' => getEnv("DB_USER"),
    'password' => getEnv("DB_PASSWORD"),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => getEnv("DB_TABLES_PREFIX"),
    'strict' => false,
    'engine' => 'InnoDB',
    'prefix_indexes' => true,
  ),
  'url' => getEnv("APP_URL"),
  'paths' =>
  array(
    'api' => 'api',
    'admin' => 'admin',
  ),
);
