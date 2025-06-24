<?php
include_once 'model/db.php';

$user_sql       = "root";
$pass_sql       = "";
$server_sql     = "localhost";
$database       = "itc_toi_linh";

$db = new db ();
$db->setUsername ( $user_sql );
$db->setPassword ( $pass_sql );
$db->setServer ( $server_sql );
$db->setDatabase ( $database );
$db->tbl_fix    = $database.'.';