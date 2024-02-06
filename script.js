//Page HOME

function showOrder() {
    window.location.href = "https://spcrose.fr/takeorder";
}
function hideOrder() {
    window.location.href = "https://spcrose.fr/home";
}

function showDelivery() {
    var delivery = document.getElementById("delivery-tab").style.display = "flex";
}

function hideDelivery() {
    var delivery = document.getElementById("delivery-tab").style.display = "none";
}