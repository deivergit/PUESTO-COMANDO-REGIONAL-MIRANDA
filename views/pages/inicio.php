<?php

    require_once "./config/database.php";

    #QUERY MYSQL
    
    require_once ("./models/queries-inicio.php");
    
?>



<div class="container-home">
    <div class="indication-card">
        <img src="./views/recourses/icons/note.svg" class="indication-card__icon">
        <div class="indication-card__box-title">
            <span class="indication-card__title">Cartas registradas</span>
            <span class="indication-card__indication"><?php echo $fila['cartas']; ?></span>
        </div>
    </div>
    <div class="indication-card">
        <img src="./views/recourses/icons/timer.svg" class="indication-card__icon">
        <div class="indication-card__box-title">
            <span class="indication-card__title">Cartas por verificar</span>
            <span class="indication-card__indication"><?php echo $fila3['por_verificar']; ?></span>
        </div>
    </div>
    <div class="indication-card">
        <img src="./views/recourses/icons/transfer.svg" class="indication-card__icon">
        <div class="indication-card__box-title">
            <span class="indication-card__title">Cartas diferidas</span>
            <span class="indication-card__indication"><?php echo $fila4['diferida_0']; ?></span>
        </div>
    </div>
    <div class="indication-card">
        <img src="./views/recourses/icons/check.svg" class="indication-card__icon">
        <div class="indication-card__box-title">
            <span class="indication-card__title">Cartas verificadas</span>
            <span class="indication-card__indication"><?php echo $fila5['verificada']; ?></span>
        </div>
    </div>
    <div class="indication-card">
        <img src="./views/recourses/icons/check-shield.svg" class="indication-card__icon">
        <div class="indication-card__box-title">
            <span class="indication-card__title">Cartas procesadas</span>
            <span class="indication-card__indication"><?php echo $fila2['procesadas']; ?></span>
        </div>
    </div>
    <div class="indication-card">
    </div>
</div>