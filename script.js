const fs = require("fs")

// Ici, nous utiliserons le fichier db.json en termes de base de données
function readDb(dbName ="db.json"){
    const data = fs.readFileSync(dbName)
    return JSON.parse(data)
}

function writeDb(obj, dbName="db.json"){
    if (!obj) {
        return console.log("Impossible de n'insérer aucun objet. Veuillez le spécifier.")
    }
    try {
        fs.writeFileSync(dbName,JSON.stringify(obj))
        return console.log("Objet inséré dans la base de données.")
    } catch(err){
        return console.log("Impossible d'insérer l'objet dans la base de données.")
    }
}
=