<?php

require_once('user.php');
require_once('database.php');
session_start();

//session_start();
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//    header("location: index.php");
//    exit;
//}

//    echo $_POST['submit'] . '<br><hr>';
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;

$databaseBaptiste = new database('mysql-baptistesevilla.alwaysdata.net','189826_admin1','0651196362','baptistesevilla_projetweb');
$user = new user('','',$username,'',$password,'','');
$databaseBaptiste->Login($user);

?>