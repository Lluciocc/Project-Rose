<?php
$hostname = $IONOS_DB_HOST;
$username = "$IONOS_DB_USERNAME";
$password = "$IONOS_DB_PASSWORD";
$db = $IONOS_DB_NAME;

$dbconnect=mysqli_connect($hostname,$username,$password,$db,3306);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['command'])) {
  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $roses=$_POST['roses'];
  $horaires=$_POST['horaires'];
  $salle=$_POST['salle'];

  $query = "INSERT INTO commandes (nom,prenom,horaire,salle,roses)
  VALUES ('$nom', '$prenom', '$horaires','$salle','$roses')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      echo "Thanks for your review.";
    }
}
?>