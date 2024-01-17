const fs = require("fs");

// converting a JS object to JSON
const user = {
  id: 1,
  completeName: "Jennifer Jones",
  age: 20,
};
const data = JSON.stringify(user);

try {
  // reading a JSON file synchronously
  fs.writeFileSync("data.json", data);
} catch (error) {
  // logging the error
  console.error(error);

  throw error;
}

// logging the outcome
console.log("data.json written correctly");

$(function(){

  var hauteur = $(window).height(); // ici je récup la hauteur de la fenêtre…

  $(window).scroll(function () {

    if ($(this).scrollTop() > hauteur) {

      $('#menu').css({
        'position': 'fixed',
          'top': '0px'
      });
      } else {

        $('#menu').css({
          'position': 'absolute',
          'top': '100%'
        });
      }
  });
})