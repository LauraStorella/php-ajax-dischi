var $ = require('jquery');
var Handlebars = require("handlebars");

$(document).ready(function() {

  // Chiamata ajax e stampa di tutti i cd nel database a caricamento pagina
  getCds('');

  // Filtro per autore tramite select e stampa dei relativi cd
  $('#author-selection').change( function() {
    var selectedAuthor = $(this).val();
    getCds(selectedAuthor);
  });

}); // document ready






// ----------------------------- FUNCTIONs -----------------------------

// Creo funzione per chiamata ajax che restituisce i dati presenti nel database
function getCds(filterAuthor) {
  // Reset container cd
  $('.cds-container').html('');
  // chiamata ajax per recuperare dati dischi
  $.ajax ({
    'url': 'http://localhost:8888/php-ajax-dischi/api-server.php',
    'method': 'GET',
    'data': {
      author: filterAuthor,
    },
    'success': function (data) {
      // console.log(data);
      var cds = data;
      // console.log(cds);
      
      // Chiamo funzione per stampa cover album
      printCds(cds);

    },
    'error': function() {
        console.log('Oops! Si è verificato un errore.');
    }
  }); // end ajax call
} // end fun getCds



//  Creo funzione per inserire gli album in html (.cds-container)
//  ---> arrayCds : contiene elenco cd da stampare (in database)
//  ---> utilizzo handlebar per popolare .cds-container con cover album
function printCds(arrayCds) {

  var source = $("#cds-container-template").html();
  var template = Handlebars.compile(source);

  // Creo ciclo For per stampare tutti gli album in array
  for (var i = 0; i < arrayCds.length; i++) {
    var singleCd = arrayCds[i];
    console.log(singleCd);

    // Inserisco info album nei placeholder di handlebars template
    // var context = {
    //   'poster': singleCd.poster,
    //   'title': singleCd.title,
    //   'author': singleCd.author,
    //   'year': singleCd.year,
    // };

    // Appendo elemento in html (.cds-container)
    // var html = template(context);
    var html = template(singleCd);
    $('.cds-container').append(html);			
  }	 
} // end fun printCds