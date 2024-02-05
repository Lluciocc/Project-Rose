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
$rosequery = $link->query("SELECT SUM(roses) FROM commandes");
$rosefetch = $rosequery->fetch_assoc()["SUM(roses)"];
settype($rosefetch,"int");

$allcommands = $link->query("SELECT * FROM commandes ORDER BY horaires");
$rows = $allcommands->fetch_assoc();
echo $rows;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home - SPC Rose</title>
    <link rel="icon" href="Images/Icon/rose_icon.png">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="welcome-txt">
        <h1>Bonjour</h1>
        <h1 class="user">User</h1>
    </div>

    <div id="take-order" onclick="showOrder()">
        <div class="barre"></div>
        <p>Prendre une commande</p>
    </div>

    <div id="delivery-order" onclick="showDelivery()">
        <div class="barre"></div>
        <p>Livrer une commande</p>
    </div>

    <div id="order-tab">
        <input class="icon-cross" type="image" src="Images/Icon/icon-cross.png" alt="Icone croix" onclick="hideOrder()">
        <p>Prendre une commande</p>

        <form method="post" name="command" id="form-order">
            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            <input type="text" id="nom" name="nom" placeholder="Nom">
            <input type="text" id="roses" name="roses" placeholder="Nombre de roses">
            <input type="text" id="horaire" name="horaire" placeholder="Horaires">
            <input type="text" id="salle" name="salle" placeholder="Salle de classe">
            
            <input type="submit" id="submit2" placeholder="Submit">
        </form>
    </div>

    <div id="delivery-tab">
    <input class="icon-cross" type="image" src="Images/Icon/icon-cross.png" alt="Icone croix" onclick="hideDelivery()">
        <p>Livrer une commande</p>
    </div>

    <div id="stock-rose">
        <input class="icon-rose" type="image" src="Images/Icon/icon-rose.png" alt="Icone rose">
        <div>
            <p>STOCK DE ROSES</p>
            <p class="count"><?php echo 1500-$rosefetch;?></p>
        </div>
    </div>

    <footer>
        <input class="icon-home" id='icon-bar' type="image" src="Images/Icon/home.png" alt="Icone home menu"style="width: 100px;">
        <input class="icon-list" id='icon-bar' type="image" src="Images/Icon/menu.png" alt="Icone liste" style="width: 100px;" >
    </footer>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $prenom=$_POST['prenom'];  
    $nom=$_POST['nom'];
    $roses=$_POST['roses'];
    $horaire=$_POST['horaire']; 
    $salle=$_POST['salle'];
    if ($roses > 3 || $roses < 0){
        echo "Nombre de roses invalide !";
    } else{
        $sql = "INSERT INTO commandes VALUES ('$nom', '$prenom', '$horaire','$salle','$roses')";

        if ($link->query($sql) === TRUE) {
            echo "Nouvelle commande ajoutée !";
        } else {
        $link->close();
        }
    }
    
}
?>

