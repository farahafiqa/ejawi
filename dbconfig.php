<?php
$DB_host = "localhost";
$DB_user = "root"; //your db username
$DB_pass = ""; //your db password 
$DB_name = "ejawi"; //your database

try{
$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
echo $e->getMessage();
}
include_once 'view.php';
$view = new view($DB_con);
?>