<?php

// Sample file: Never send your credentials to git

// host
$host = 'http://localhost/Projetos/crud-php-main/';

// db
$db_name = 'crud_man';
$db_host = 'localhost';
$db_user = 'luciano';
$db_pass = '112233';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}
