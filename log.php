<?php
use \App\Db\Database;

$dsn = "mysql:host=localhost;dbname=vagas;charset=utf8mb4";

$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // Disable emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Make the default fetch be an associative array
];

try {
  $pdo = new PDO($dsn, "root", "root", $options);
  $query = 'INSERT INTO app (mome,blabla,bla,nla) VALUES (?,?,?,?)';
  exit($query);
}catch (Exception $e) {
  die($e->getMessage());
  
}

?>