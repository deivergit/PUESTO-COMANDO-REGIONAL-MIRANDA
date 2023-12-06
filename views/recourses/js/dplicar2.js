
    document.getElementById("btnMore").onclick = function () {
        funcionparaclonareldivconsuscampos()
    };

    function funcionparaclonareldivconsuscampos() {

        //contar las clases para el correlativo de agregados dinamicos

        var cantidefilasadd = 0
        var temporalcant = document.getElementById("contador").value

        var temporalcantnumerico = temporalcant * 1
        cantidefilasadd = document.getElementsByClassName("contarnuevafila").length;

        var i;

        if (temporalcant > cantidefilasadd) {
            i = temporalcantnumerico + 1;
        } else {
            i = cantidefilasadd + 1
        }
        temporalcant = i
        document.getElementById("contador").value = temporalcant

        // acá clonas el div con todos los campos
        var divconcamposcopiados = document.getElementById("divquesevaacopiar")
        divconcamposcopiados = divconcamposcopiados.cloneNode(true);

        console.log(divconcamposcopiados)

        var cadena = document.getElementById("divquesevaacopiar").outerHTML
        console.log(" cadena " + cadena)

        var elementocreado = document.createElement("div");
        var elementocreadodos = document.createElement("div");



        var creamosundivdentrodeldivdondesevaamostrar = '';
        creamosundivdentrodeldivdondesevaamostrar += '<div id="nuevoscampos' + i +
            '" class="contarnuevafila" ><br><br> ';
        creamosundivdentrodeldivdondesevaamostrar += '<button type="button" name="remove" id="' + i +
            '" class="btn btn-danger btn_remove" onClick="funcioneliminar(this.id)">X</button> ' + cadena;
        creamosundivdentrodeldivdondesevaamostrar += '</div> ';


        elementocreado.innerHTML = creamosundivdentrodeldivdondesevaamostrar

        document.getElementById('divdondeapareceraeldivcopiado').appendChild(elementocreado);

        i++

    }

    function funcioneliminar(elidobtenido) {
        document.getElementById("nuevoscampos" + elidobtenido).remove();
    }
    
    