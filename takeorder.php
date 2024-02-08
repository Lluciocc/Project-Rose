<?php
session_start();
if (!isset($_SESSION["mdp"])){
?>
    <script>window.location.href = "https://spcrose.fr/login"</script>
<?php
}
$host_name = 'db5015066517.hosting-data.io';
$database = 'dbs12511800';
$user_name = 'dbu72595';
$password = 'spcWeLoveRosesSkibidi57';

$link = new mysqli($host_name, $user_name, $password, $database,3306);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="Images/Icon/rose_icon.png">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Order - SPC Rose</title>
</head>
<body>
    <div id="order-tab">
        <input class="icon-cross" type="image" src="Images/Icon/icon-cross.png" alt="Icone croix" onclick="hideOrder()">
        <p>Prendre une commande</p>

        <form method="post" name="command" id="form-order">
            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            <input type="text" id="nom" name="nom" placeholder="Nom">
            <input type="text" id="roses" name="roses" placeholder="Nombre de roses">
            <select type="text" id="horaire" name="horaire" placeholder="Horaires">
                <option value="13:45:00">13:45:00</option>
                <option value="14:45:00">14:45:00</option>
                <option value="15:50:00">15:50:00</option>
                <option value="16:50:00">16:50:00</option>
            </select>
            <input type="text" id="salle" name="salle" placeholder="Salle de classe">
            
            <input type="submit" id="submit2" placeholder="Submit">
        </form>
    </div>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $prenom=$_POST['prenom'];  
    $nom=$_POST['nom'];
    $roses=$_POST['roses'];
    $horaire=$_POST['horaire']; 
    $salle=$_POST['salle'];
    if ($roses > 5 || $roses <= 0 || $horaire == "00:00:00"){
        echo "Commande invalide";
    } else{
        $sql = "INSERT INTO commandes VALUES ('$nom', '$prenom', '$horaire','$salle','$roses',DEFAULT)";

        if ($link->query($sql) === TRUE) {
            echo "Nouvelle commande ajoutée !";
        } else {
        $link->close();
        }
    }?>
    <script> window.location.href = "https://spcrose.fr/home" </script>
    <?php
}
?>
