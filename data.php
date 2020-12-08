<?php
error_reporting(E_ALL);
ini_set('display_errors','On');


// 1 connection
$db = new PDO('mysql:host=localhost;dbname=cnc', "juju", "tjrjuju");

$q = $db->query("SELECT * FROM information;");
$information = $q->fetch();

$adresse = $information["adresse"];
$tel = $information["telephone"];

 ?>              