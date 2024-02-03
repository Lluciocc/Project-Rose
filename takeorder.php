<?php


$dbconnect=mysqli_connect("db5015066517.hosting-data.io","dbu72595","spcWeLoveRosesSkibidi57","dbs12545785",3306);

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
            echo "Records updated: ";
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }

    $conn->close();
}?>
<script>window.location.href = "https://spcrose.fr/home"</script>
