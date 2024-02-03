<?php
ini_set('display_errors', 'on');
$host_name = 'db5015066517.hosting-data.io';
$database = 'dbs12511800';
$user_name = 'dbu72595';
$password = 'spcWeLoveRosesSkibidi57';

$link = new mysqli($host_name, $user_name, $password, $database,3306);

if ($link->connect_error) {
  die('<p>La connexion au serveur MySQL a échoué: '. $link->connect_error .'</p>');
} else {
  echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
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
            echo "Records updated: ";
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }

    $conn->close();
}?>
<script>window.location.href = "https://spcrose.fr/home"</script>
