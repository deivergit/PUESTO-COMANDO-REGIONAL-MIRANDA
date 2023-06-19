<?php
    # GENERAL INFORMATION ABOUT THE WEBSITE
    $tab_description = 'AGREGAR SOLICITUD';
    $item_one = 'Solicitudes';
    $item_two = 'Agregar solicitud';
    
    # USER SESSION
    include './config/database.php';
    session_start();

    # SERVER TIME
    date_default_timezone_set("America/Caracas");
    $DateAndTime = date('d-m-Y h:i:s a', time());  
?>

<div>
    <button class="button button--save button-modal" id="abrirModal" title="Agregar usuario">
        <img src="./views/recourses/icons/plus.svg" alt="icono">
    </button>



</div>
<dialog id="ventanaModal" class="modal">
    <form class="form" enctype=multipart/form-data method="POST" action="./controllers/agregar-carta-controller.php">
        <div class="box">
            <h2>Registrar carta</h2>
            <img class="icon_cerrar" src="./views/recourses/icons/x.svg">
        </div>
        <h2 class="subtitle"><img src="./views/recourses/icons/user-black.svg" alt="" srcset="">Datos personales del
            solicitante</h2>

        <div class="box-input box-input--regular">
            <label for="primer_nombre" class="label">Primer nombre</label>
            <input type=text class="input input--regular" name="primer_nombre" id="primer_nombre" autocomplete="off"
                require>
        </div>

        <div class="box-input box-input--regular">
            <label for="segundo_nombre" class="label">Segundo nombre</label>
            <input type=text class="input input--regular" name="segundo_nombre" id="segundo_nombre" autocomplete="off">
        </div>

        <div class="box-input box-input--regular">
            <label for="primer_apellido" class="label">Primer apellido</label>
            <input type=text class="input input--regular" name="primer_apellido" id="primer_apellido"
                autocomplete="off">
        </div>

        <div class="box-input box-input--regular">
            <label for="segundo_apellido" class="label">Segundo apellido</label>
            <input type=text class="input input--regular" name="segundo_apellido" id="segundo_apellido"
                autocomplete="off">
        </div>

        <div class="box-input box-input--regular">
            <label for="tipo de documento" class="label">Tipo de documento</label>
            <select class="input input--small" name="tipo_de_documento">
                <option value="V">V</option>
                <option value="E">E</option>
                <option value="P">P</option>
            </select>
        </div>

        <div class="box-input box-input--regular">
            <label for="numero_de_documento" class="label">Numero de documento</label>
            <input type=text name="numero_de_documento" id="numero_de_documento" class="input input--regular"
                autocomplete="off">
        </div>

        <box class="box-input box-input--regular">
            <label for="nacionalidad" class="label">País de origen</label>
            <select class="input input--regular" name="pais_de_origen">
                <option selected disabled>SELECCIONE</option>
                <option value="AF">Afganistán</option>
                <option value="AL">Albania</option>
                <option value="DE">Alemania</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antártida</option>
                <option value="AG">Antigua y Barbuda</option>
                <option value="AN">Antillas Holandesas</option>
                <option value="SA">Arabia Saudí</option>
                <option value="DZ">Argelia</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaiyán</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrein</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BE">Bélgica</option>
                <option value="BZ">Belice</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermudas</option>
                <option value="BY">Bielorrusia</option>
                <option value="MM">Birmania</option>
                <option value="BO">Bolivia</option>
                <option value="BA">Bosnia y Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BR">Brasil</option>
                <option value="BN">Brunei</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="BT">Bután</option>
                <option value="CV">Cabo Verde</option>
                <option value="KH">Camboya</option>
                <option value="CM">Camerún</option>
                <option value="CA">Canadá</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CY">Chipre</option>
                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comores</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, República Democrática del</option>
                <option value="KR">Corea</option>
                <option value="KP">Corea del Norte</option>
                <option value="CI">Costa de Marfíl</option>
                <option value="CR">Costa Rica</option>
                <option value="HR">Croacia (Hrvatska)</option>
                <option value="CU">Cuba</option>
                <option value="DK">Dinamarca</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egipto</option>
                <option value="SV">El Salvador</option>
                <option value="AE">Emiratos Árabes Unidos</option>
                <option value="ER">Eritrea</option>
                <option value="SI">Eslovenia</option>
                <option value="ES">España</option>
                <option value="US">Estados Unidos</option>
                <option value="EE">Estonia</option>
                <option value="ET">Etiopía</option>
                <option value="FJ">Fiji</option>
                <option value="PH">Filipinas</option>
                <option value="FI">Finlandia</option>
                <option value="FR">Francia</option>
                <option value="GA">Gabón</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GD">Granada</option>
                <option value="GR">Grecia</option>
                <option value="GL">Groenlandia</option>
                <option value="GP">Guadalupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GY">Guayana</option>
                <option value="GF">Guayana Francesa</option>
                <option value="GN">Guinea</option>
                <option value="GQ">Guinea Ecuatorial</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="HT">Haití</option>
                <option value="HN">Honduras</option>
                <option value="HU">Hungría</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IQ">Irak</option>
                <option value="IR">Irán</option>
                <option value="IE">Irlanda</option>
                <option value="BV">Isla Bouvet</option>
                <option value="CX">Isla de Christmas</option>
                <option value="IS">Islandia</option>
                <option value="KY">Islas Caimán</option>
                <option value="CK">Islas Cook</option>
                <option value="CC">Islas de Cocos o Keeling</option>
                <option value="FO">Islas Faroe</option>
                <option value="HM">Islas Heard y McDonald</option>
                <option value="FK">Islas Malvinas</option>
                <option value="MP">Islas Marianas del Norte</option>
                <option value="MH">Islas Marshall</option>
                <option value="UM">Islas menores de Estados Unidos</option>
                <option value="PW">Islas Palau</option>
                <option value="SB">Islas Salomón</option>
                <option value="SJ">Islas Svalbard y Jan Mayen</option>
                <option value="TK">Islas Tokelau</option>
                <option value="TC">Islas Turks y Caicos</option>
                <option value="VI">Islas Vírgenes (EEUU)</option>
                <option value="VG">Islas Vírgenes (Reino Unido)</option>
                <option value="WF">Islas Wallis y Futuna</option>
                <option value="IL">Israel</option>
                <option value="IT">Italia</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japón</option>
                <option value="JO">Jordania</option>
                <option value="KZ">Kazajistán</option>
                <option value="KE">Kenia</option>
                <option value="KG">Kirguizistán</option>
                <option value="KI">Kiribati</option>
                <option value="KW">Kuwait</option>
                <option value="LA">Laos</option>
                <option value="LS">Lesotho</option>
                <option value="LV">Letonia</option>
                <option value="LB">Líbano</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libia</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituania</option>
                <option value="LU">Luxemburgo</option>
                <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                <option value="MG">Madagascar</option>
                <option value="MY">Malasia</option>
                <option value="MW">Malawi</option>
                <option value="MV">Maldivas</option>
                <option value="ML">Malí</option>
                <option value="MT">Malta</option>
                <option value="MA">Marruecos</option>
                <option value="MQ">Martinica</option>
                <option value="MU">Mauricio</option>
                <option value="MR">Mauritania</option>
                <option value="YT">Mayotte</option>
                <option value="MX">México</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldavia</option>
                <option value="MC">Mónaco</option>
                <option value="MN">Mongolia</option>
                <option value="MS">Montserrat</option>
                <option value="MZ">Mozambique</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Níger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk</option>
                <option value="NO">Noruega</option>
                <option value="NC">Nueva Caledonia</option>
                <option value="NZ">Nueva Zelanda</option>
                <option value="OM">Omán</option>
                <option value="NL">Países Bajos</option>
                <option value="PA">Panamá</option>
                <option value="PG">Papúa Nueva Guinea</option>
                <option value="PK">Paquistán</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Perú</option>
                <option value="PN">Pitcairn</option>
                <option value="PF">Polinesia Francesa</option>
                <option value="PL">Polonia</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="UK">Reino Unido</option>
                <option value="CF">República Centroafricana</option>
                <option value="CZ">República Checa</option>
                <option value="ZA">República de Sudáfrica</option>
                <option value="DO">República Dominicana</option>
                <option value="SK">República Eslovaca</option>
                <option value="RE">Reunión</option>
                <option value="RW">Ruanda</option>
                <option value="RO">Rumania</option>
                <option value="RU">Rusia</option>
                <option value="EH">Sahara Occidental</option>
                <option value="KN">Saint Kitts y Nevis</option>
                <option value="WS">Samoa</option>
                <option value="AS">Samoa Americana</option>
                <option value="SM">San Marino</option>
                <option value="VC">San Vicente y Granadinas</option>
                <option value="SH">Santa Helena</option>
                <option value="LC">Santa Lucía</option>
                <option value="ST">Santo Tomé y Príncipe</option>
                <option value="SN">Senegal</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leona</option>
                <option value="SG">Singapur</option>
                <option value="SY">Siria</option>
                <option value="SO">Somalia</option>
                <option value="LK">Sri Lanka</option>
                <option value="PM">St Pierre y Miquelon</option>
                <option value="SZ">Suazilandia</option>
                <option value="SD">Sudán</option>
                <option value="SE">Suecia</option>
                <option value="CH">Suiza</option>
                <option value="SR">Surinam</option>
                <option value="TH">Tailandia</option>
                <option value="TW">Taiwán</option>
                <option value="TZ">Tanzania</option>
                <option value="TJ">Tayikistán</option>
                <option value="TF">Territorios franceses del Sur</option>
                <option value="TP">Timor Oriental</option>
                <option value="TG">Togo</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad y Tobago</option>
                <option value="TN">Túnez</option>
                <option value="TM">Turkmenistán</option>
                <option value="TR">Turquía</option>
                <option value="TV">Tuvalu</option>
                <option value="UA">Ucrania</option>
                <option value="UG">Uganda</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistán</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Vietnam</option>
                <option value="YE">Yemen</option>
                <option value="YU">Yugoslavia</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabue</option>
            </select>
        </box>

        <div class="box-input box-input--regular">
            <label for="fecha_de_nacimiento" class="label">Fecha de nacimiento</label>
            <input type=date id="fecha_de_nacimiento" class="input input--regular" name="fecha_de_nacimiento">
        </div>

        <div class="box-input box-input--regular">
            <label for="sexo" class="label">Sexo</label>
            <select id="sexo" class="input input--regular" name="sexo">
                <option disabled selected>SELECCIONE</option>
                <option value="MASCULINO">MASCULINO <img src="/views/recourses/icons/male-sign.svg" alt=""></option>
                <option value="FEMENINO">FEMENINO <img src="/views/recourses/icons/famale-sign.svg" alt=""></option>
            </select>
        </div>
        <input type="text" name="contador" id="contador">
        <div class="box_phones" id="divquesevaacopiar">


            <div class="box-input box-input--regular">
                <label for="telefono_movil" class="label">Número de Teléfono</label>
                <input type=text class="input input--regular" name="telefono_movil" autocomplete="off">
            </div>

            <div class="box-input box-input--regular">
                <label for="telefono_alternativo" class="label">Tipo de número</label>
                <select id="tipo_de_numero" class="input input--regular" name="tipo_de_numero">
                    <option disabled selected>SELECCIONE</option>
                    <option value="MOVIL">MOVIL</option>
                    <option value="FIJO">FIJO</option>
                </select>
            </div><br><br>
        </div>




        <div id="divdondeapareceraeldivcopiado">

        </div>

        <br>
        <hr>

        <button type="button" class="btn btn-success " id="btnMore">
            +
        </button>


        <h3 class="subtitle"><img src="./views/recourses/icons/map.svg" alt="">Dirección de habitación</h3>

        <div class="box-input box-input--regular">
            <label for="municipio" class="label">Estado</label>
            <select class="input input--regular" name="estado">
                <option value="MIRANDA">MIRANDA</option>
            </select>
        </div>

        <div class="box-input box-input--regular">
            <label for="municipio" class="label">Municipio</label>
            <select class="input input--regular" id="municipio" name="municipio">
                <option value="selectione" disabled>SELECCIONE</option>
            </select>
        </div>

        <div class="box-input box-input--regular">
            <label for="parroquia" class="label">Parroquia</label>
            <select class="input input--regular" id="parroquia" name="parroquia">
                <option value="selectione">SELECCIONE</option>
            </select>
        </div>

        <div class="box-input box-input--big">
            <label class="label">Dirección</label>
            <textarea class="input input--big" name="direccion_exacta" autocomplete="off"></textarea>
        </div>

        <div class="box-input box-input--regular">
            <label for="casa-del-buen-vivir" class="label">Casa del buen vivir</label>
            <select class="input input--regular" id="casa-del-buen-vivir" name="casa_del_buen_vivir">
                <option>SELECCIONE</option>
                <option value="BARLOVENTO">BARLOVENTO</option>
                <option value="GUAICAIPURO">GUAICAIPURO</option>
                <option value="GUARENAS-GUATIRE">GUARENAS-GUATIRE</option>
                <option value="METROPOLITANO-1">METROPOLITANO-1</option>
                <option value="METROPOLITANO-2">METROPOLITANO-2</option>
                <option value="VALLES DEL TUY">VALLES DEL TUY</option>
            </select>
        </div>

        <div class="box-input box-input--regular">
            <label for="" class="label">Cuadrante de paz</label>
            <select class="input input--regular">
                <option></option>
            </select>
        </div>

        <div class="box-input box-input--regular">
            <label for="" class="label">Zona del cuadrante de paz</label>
            <input type=text class="input input--regular" name="zona_del_cuadrante_de_paz" />
        </div>

        <div class="box-input box-input--regular">
            <label for="" class="label">Eje del cuadrante de paz</label>
            <input type=text class="input input--regular" name="eje_del_cuadrante_de_paz" />
        </div>

        <h4 class="subtitle"><img src="./views/recourses/icons/list-ol.svg" alt="">Solicitudes de la carta</h4>
        
        <a href="#" class="button" id="duplicar2">+</a>

        <div id="duplicar2">
        <div class="box-input box-input--regular" id="box7">
            <label for="categoría" class="label">Categoría</label>
            <select class="input input--regular" name="categoria_1">
                <option value="crédito">crédito</option>
                <option value="cultura">cultura</option>
                <option value="deporte">deporte</option>
                <option value="derecho a la ciudad">derecho a la ciudad</option>
                <option value="educación">educación</option>
                <option value="emprendimiento">emprendimiento</option>
                <option value="salud">salud</option>
                <option value="tecnología">tecnología</option>
                <option value="transporte">transporte</option>
                <option value="vivienda">vivienda</option>
            </select>
        </div>

        <div class="box-input box-input--regular">
            <label for="" class="label">Tipo de requerimiento</label>
            <input type="text" class="input input--regular" name="tipo_de_requerimiento_1">
        </div>

        <div class="box-input box-input--regular">
            <label for="" class="label">Requerimiento</label>
            <input type="text" class="input input--regular" name="requerimiento_1">
        </div>

        <div class="box-input box-input--regular">
            <label for="" class="label">Cantidad</label>
            <input type="number" class="input input--small" name="cantidad_1">
        </div>
        </div>
        

        <div class="box-input box-input--big">
            <label class="label">Descripción del caso</label>
            <textarea class="input input--big textarea" name="descripcion_del_caso"></textarea>
        </div>

        <h5 class="subtitle">Informacion adicional</h5>

        <box class="box-input box-input--regular">
            <label for="protector responsable" class="label">Estado de la solicitud</label>
            <select class="input input--regular" name="estado_de_la_solicitud">
                <option value="POR VERIFICAR">POR VERIFICAR</option>
                <option value="VERIFICADA">VERIFICADA</option>
                <option value="DIFERIDA">DIFERIDA</option>
                <option value="PROCESADA">PROCESADA</option>
            </select>
        </box>

        <box class="box-input box-input--regular">
            <label for="protector responsable" class="label">Vía de recepción</label>
            <select class="input input--regular" name="via_de_recepcion">
                <option disabled selected>SELECCIONE</option>
                <option>SECRETARIA COORDINADORA SOCIAL</option>
                <option>REDES SOCIALES</option>
                <option>DESPLIEGUE DEL GOBERNADOR</option>
                <option>DESPLIEGUE DEL SECRETARIO</option>
            </select>
        </box>

        <box class="box-input box-input--regular">
            <label for="protector responsable" class="label">Fecha y hora de la solicitud</label>
            <input name="fecha_y_hora_de_la_solicitud" class="input input--regular" value="<?php echo $DateAndTime?>" />
        </box>

        <box class="box-input box-input--regular">
            <label for="protector responsable" class="label">Fecha del despliegue</label>
            <input type="date" class="input input--regular" name="fecha_del_despliegue">
        </box>

        <box class="box-input box-input--regular">
            <label for="protector responsable" class="label">Protector responsable</label>
            <select class="input input--regular" name="protector_responsable">
                <option selectd><?php echo $nombre.$apellido ?></option>
            </select>
        </box>

        <box class="box-input box-input--regular">
            <label for="protector responsable" class="label">Fecha de atencion de la carta</label>
            <input type="date" class="input input--regular" name="fecha_atencion_carta">
        </box>

        <input type="file" name="" id="">

        <div class="box-button box-button__center">
            <button class="button button--save"><img src="./views/recourses/icons/save.svg" alt="boton guardar"
                    type="submit"><span>Guardar</span></button>
            <button class="cerrar button button--cancel" type="reset"><img src="./views/recourses/icons/x-white.svg"
                    alt="boton cancelar"><span>Cerrar</span></button>
        </div>
    </form>
</dialog>