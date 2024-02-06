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
$inf = 'spcWeLoveRosesSkibidi57';

$link = new mysqli($host_name, $user_name, $inf, $database,3306);
$rosequery = $link->query("SELECT SUM(roses) FROM commandes");
$rowquery  = $link->query("SELECT * FROM commandes ORDER BY horaire");
$rosefetch = $rosequery->fetch_assoc()["SUM(roses)"];
$roselivre = $link->query("SELECT totroses FROM roselivre WHERE id = 667");
$rows  = $rowquery->fetch_all();

settype($rosefetch,"int");


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

    <div id="delivery-tab">
    <input class="icon-cross" type="image" src="Images/Icon/icon-cross.png" alt="Icone croix" onclick="hideDelivery()">
        <div id="delivery-send">
            <form method="post" id="sendform">
                <input id="send" type="number" name="send">
                <input class="submit" type="submit" value="Send">
            </form>
        </div>
        <div id="delivery-subtab">
            <p>Livrer une commande</p>
            <p><?php foreach ($rows as $row){
                    foreach($row as $key => $value){
                        if ($row[3] != 0){
                            if (!in_array($key, array(4,5))){
                                echo $value, "  ";
                            } 
                            elseif ($key == 4){
                                echo $value, " roses ";
                            }
                            elseif ($key == 5){
                                echo "(ID : ",$value,")";
                                echo '<br />';
                            }
                        }
                        
                    }
                }?>
            </p>
        </div>
        
    </div>

    <div id="stock-rose">
        <input class="icon-rose" type="image" src="Images/Icon/icon-rose.png" alt="Icone rose">
        <div>
            <p>STOCK DE ROSES</p>
            <p class="count"><?php echo 1500-$rosefetch-$roselivre;?></p>
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

    $id=$_POST['send'];
    settype($id,"int");
    $sql = "DELETE FROM commandes WHERE id = $id;
            UPDATE roselivre SET totroses = totroses + (SELECT roses FROM commandes WHERE id = $id) WHERE id = 667";

    if ($link->query($sql) === TRUE) {
        echo "Commande livrée !";
    } else {
        $link->close();
    }
    }
?>
