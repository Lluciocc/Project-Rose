function letPass (){
    let password = toString(document.getElementById("password"))
    if (password === "cyka"){
        window.location.replace("./home.html");
    } else {
        throw(err)
    }
}
const formData = document.getElementById("log")
formData.addEventListener("submit", letPass)



    

module.exports = {readDb,writeDb}

