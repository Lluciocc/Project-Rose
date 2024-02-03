<?php
session_start();
if (!isset($_SESSION["mdp"])){
?>
    <script>window.location.href = "https://spcrose.fr/login"</script>
<?php
}

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
        <p>Prendre une commande</p>
        <input class="icon-cross" type="image" src="Images/Icon/icon-cross.png" alt="Icone croix" onclick="hideOrder()">
        <form method="post" name="command" id="form-order">
            <input type="text" id="prenom" placeholder="Prénom">
            <input type="text" id="nom" placeholder="Nom">
            <input type="text" id="roses" placeholder="Nombre de roses">
            <input type="text" id="horaire" placeholder="Horaires">
            <input type="text" id="salle" placeholder="Salle de classe">
            <input type="submit" id="submit2" placeholder="Submit">
        </form>
    </div>

    <div id="delivery-tab">
        <p>Livrer une commande</p>
        <input class="icon-cross" type="image" src="Images/Icon/icon-cross.png" alt="Icone croix" onclick="hideDelivery()">
    </div>

    <div id="stock-rose">
        <input class="icon-rose" type="image" src="Images/Icon/icon-rose.png" alt="Icone rose">
        <div>
            <p>STOCK DE ROSES</p>
            <p class="count">1500</p>
        </div>
    </div>

    <footer>
        <input class="icon-home" id='icon-bar' type="image" src="Images/Icon/home.png" alt="Icone home menu"style="width: 100px;">
        <input class="icon-list" id='icon-bar' type="image" src="Images/Icon/menu.png" alt="Icone liste" style="width: 100px;" >
    </footer>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    echo "<p>$nom, $prenom, $horaire,$salle,$roses<p>";
    foreach($_POST['command'] as $key=>$val)
{
   echo $val;
}
    $result = $conn->query("INSERT INTO commandes (nom,prenom,horaire,salle,roses) VALUES ('$nom', '$prenom', '$horaire','$salle','$roses')");

    
    $conn->close();
    }
?>