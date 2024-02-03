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


$prenom=$_POST['prenom'];  
$nom=$_POST['nom'];
$roses=$_POST['roses'];
$horaire=$_POST['horaire']; 
$salle=$_POST['salle'];
echo "$nom, $prenom, $horaire,$salle,$roses";
$result = $conn->query("INSERT INTO commandes (nom,prenom,horaire,salle,roses) VALUES ('$nom', '$prenom', '$horaire','$salle','$roses')");

if ($result === TRUE) {
        echo "Records updated: ";
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
$conn->close();
?>
<script>window.location.href = "https://spcrose.fr/home"</script>