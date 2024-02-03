<?php

$username = "$IONOS_DB_USERNAME";
$password = "$IONOS_DB_PASSWORD";
$db = $IONOS_DB_NAME;

$dbconnect=mysqli_connect("localhost",$username,$password,$db,3306);

if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['command'])) {
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $roses=$_POST['roses'];
    $horaires=$_POST['horaires'];
    $salle=$_POST['salle'];

    $sql = "INSERT INTO commandes (nom,prenom,horaire,salle,roses)
    VALUES ('$nom', '$prenom', '$horaires','$salle','$roses')";

    if ($conn->query($sql) === TRUE) {
            echo "Records updated: ".$student_id."-".$name."-".$age."-".$gender;
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }

    $conn->close();
}