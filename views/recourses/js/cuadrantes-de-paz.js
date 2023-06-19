let $municipio = document.getElementById('municipio');
let $provincia = document.getElementById('parroquia');

let municipios = ['Acevedo', 'Andrés bello', 'Baruta', 'Brión', 'Buroz', 'Carrizal', 'Chacao', 'Cristóbal Rojas', 'El Hatillo', 'Guaicaipuro','Independencia', 'Los Salias', 'Páez', 'Paz Castillo', 'Pedro Gual', 'Plaza', 'Simón Bolívar', 'Sucre', 'Tomas Lander', 'Urdaneta', 'Zamora']
let provincias = ['Araguita', 'Arévalo González', 'Capaya', 'Caucagua', 'El Café', 'Marizapa', 'Panaquire', 'Ribas', 'Cumbo', 'San José De Barlovento', 'El Cafetal', 'Las Minas', 'Nuestra Señora del Rosario', 'Curiepe', 'Higuerote', 'Tacarigua de Brión', 'Mamporal', 'Carrizal', 'Chacao', 'Charallave', 'Las Brisas', 'Santa Rosalía de Palermo de El Hatillo','Altagracia de la montaña','Cecilio Acosta','Los Teques','El Jarillo','San Pedro','Tácata','Paracotos', 'El Cartanal','Santa Teresa del Tuy','San Antonio de los Altos','El Guapo','Paparo','Río Chico','San Fernando del Guapo','Tacarigua de la Laguna','Santa Lucía del Tuy','Cúpira','Machurucuto','Guarenas','San Antonio de Yare','San Francisco de Yare','Caucaguita','Filas de Mariche','La Dolorita','Leoncio Martínez','Petare','La Democracia','Ocumare del Tuy','Santa Bárbara','Cúa','Nueva Cúa','Araira','Guatire']

function mostrarLugares(arreglo, lugar) {
    let elementos = '<option selected disabled>SELECCIONE</option>'

    for (let i = 0; i < arreglo.length; i++) {
        elementos += '<option value="' + arreglo[i] + '">' + arreglo[i] + '</option>'
    }

    lugar.innerHTML = elementos
}

mostrarLugares(municipios, $municipio)

function recortar(array, inicio, fin, lugar) {
    let recortar = array.slice(inicio, fin)
    mostrarLugares(recortar, lugar)
}

$municipio.addEventListener('change', function () {
    let valor = $municipio.value

    switch (valor) {
        case 'Acevedo':
            recortar(provincias, 0, 8, $provincia)
            break
        case 'Andrés bello':
            recortar(provincias, 8, 10, $provincia)
            break
        case 'Baruta':
            recortar(provincias, 10, 13, $provincia)
            break
        case 'Brión':
            recortar(provincias, 13, 16, $provincia)
            break
        case 'Buroz':
            recortar(provincias, 16, 17, $provincia)
            break
        case 'Carrizal':
            recortar(provincias, 17, 18, $provincia)
            break
        case 'Chacao':
            recortar(provincias, 18, 19, $provincia)
            break
        case 'Cristóbal Rojas':
            recortar(provincias, 19, 21, $provincia)
            break
        case 'El Hatillo':
            recortar(provincias, 21, 22, $provincia)
            break
        case 'Guaicaipuro':
            recortar(provincias, 22, 29, $provincia)
            break
        case 'Independencia':
            recortar(provincias, 29, 31, $provincia)
            break
        case 'Los Salias':
            recortar(provincias, 31, 32, $provincia)
            break
        case 'Páez':
            recortar(provincias, 32, 37, $provincia)
            break
        case 'Paz Castillo':
            recortar(provincias, 37, 38, $provincia)
            break
        case 'Pedro Gual':
            recortar(provincias, 38, 40, $provincia)
            break
        case 'Plaza':
            recortar(provincias, 40, 41, $provincia)
            break
        case 'Simón Bolívar':
            recortar(provincias, 41, 43, $provincia)
            break
        case 'Sucre':
            recortar(provincias, 43, 48, $provincia)
            break
        case 'Tomas Lander':
            recortar(provincias, 48, 51, $provincia)
            break
        case 'Urdaneta':
            recortar(provincias, 51, 53, $provincia)
            break
        case 'Zamora':
            recortar(provincias, 53, 55, $provincia)
            break
    }

});