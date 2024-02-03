<?php
ini_set('display_errors', 'on');
$host_name = 'db5015066517.hosting-data.io';
$database = 'dbs12511800';
$user_name = 'dbu72595';
$password = 'spcWeLoveRosesSkibidi57';

$link = new mysqli($host_name, $user_name, $password, $database,3306);

$prenom=$_POST['prenom'];  
$nom=$_POST['nom'];
$roses=$_POST['roses'];
$horaire=$_POST['horaire']; 
$salle=$_POST['salle'];

$result = $conn->query("INSERT INTO commandes (nom,prenom,horaire,salle,roses) VALUES ('$nom', '$prenom', '$horaire','$salle','$roses')");

?>
<script>window.location.href = "https://spcrose.fr/home"</script>
