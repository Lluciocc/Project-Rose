const fs = require("fs")

// Ici, nous utiliserons le fichier db.json en termes de base de données
function readDb(dbName ="db.json"){
    const data = fs.readFileSync(dbName)
    return JSON.parse(data)
}

// On doit changer la fonction write parce que la db est remplacée
function writeDb(obj, dbName="db.json"){
    if (!obj) {
        return console.log("Impossible de n'insérer aucun objet. Veuillez le spécifier.")
    }
    try {
        fs.writeFileSync(dbName,JSON.stringify(obj,null,2),"utf-8")
        return console.log("Objet inséré dans la base de données.")
    } catch(err){
        return console.log("Impossible d'insérer l'objet dans la base de données.")
    }
}

// Tests
const lucas1 = {
    nom : "Froehlinger",
    prenom : "Lucas",
    classe: "T8"
}
const lucas2 = {
    nom : "Ciarcello",
    prenom : "Lucas",
    classe: "2-2"
}

writeDb(lucas1)
writeDb(lucas2)
console.log(readDb())

module.exports = {readDb,writeDb}
