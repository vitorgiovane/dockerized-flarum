<?php

verifyDependencies();
loadAutoload();

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

function loadAutoload()
{
  require __DIR__ . "/vendor/autoload.php";
}

function verifyDependencies()
{
  if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo "<h2>The /vendor/autoload.php was not found.</h2>
    <hr>
    <p>Run the <strong>composer install</strong> command on a terminal.</p>";
    die;
  }
}
