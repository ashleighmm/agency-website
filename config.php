<?php 

/*$username = "root"; 
$password = "root"; 
$host = "localhost"; 
$dbname = "zia";*/

$username = "ziacondyhf_1"; 
$password = "Ghhp6Lf8"; 
$host = "sql18.jnb1.host-h.net"; 
$dbname = "ziacondyhf_db1";

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
try { $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); } 
catch(PDOException $ex){ die("Failed to connect to the database: " . $ex->getMessage());} 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
header('Content-Type: text/html; charset=utf-8'); 
session_start();
?>