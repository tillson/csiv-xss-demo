<?php

define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
session_start();

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'cyclonenet');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>
