document.getElementById("btnMore").onclick = function () { funcionparaclonareldivconsuscampos() };

function funcionparaclonareldivconsuscampos () {


// acá clonas el div con todos los campos

var divconcamposcopiados = $('#divquesevaacopiar').clone();



//Acá pegas el div copiado en el div que puse al final del HTML 
$('#divdondeapareceraeldivcopiado').append(divconcamposcopiados);


}