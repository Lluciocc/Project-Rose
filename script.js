//Page HOME

function showOrder() {
    var order = document.getElementById("order-tab").style.display = "flex";
    window.location.href = "https://spcrose.fr/takeorder.php";
}
function hideOrder() {
    window.location.href = "https://spcrose.fr/home.php";
}

function showDelivery() {
    var delivery = document.getElementById("delivery-tab").style.display = "flex";
}

function hideDelivery() {
    var delivery = document.getElementById("delivery-tab").style.display = "none";
}