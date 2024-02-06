//Page HOME

function showOrder() {
    window.location.href = "https://spcrose.fr/takeorder";
}
function hideOrder() {
    window.location.href = "https://spcrose.fr/home";
}

function showDelivery() {
    var delivery = document.getElementById("delivery-tab").style.display = "flex";
    var subtab = document.getElementById("delivery-subtab").style.display = "flex";
    var send = document.getElementById("delivery-send").style.display = "flex"
}

function hideDelivery() {
    var delivery = document.getElementById("delivery-tab").style.display = "none";
    var subtab = document.getElementById("delivery-subtab").style.display = "none";
    var send = document.getElementById("delivery-send").style.display = "none"
}