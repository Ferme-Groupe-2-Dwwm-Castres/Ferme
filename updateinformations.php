<a href="admin.php" target="_blank">Cliquer ici</a>
<?php
include "data.php";

$adresse = $_POST["adresse"];
$tel = $_POST["telephone"];

$db->query("update information set adresse = '$adresse', telephone = '$tel';");
echo $adress;
echo $tel;
 ?>