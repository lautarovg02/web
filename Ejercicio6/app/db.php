<?php

function getAllMaterias(){

    //* Abrimos una conexion
    $db = new PDO('mysql:host=localhost;'.'dbname=db_facu;charset=utf8', 'root', '');

     //* 2. Enviamos la consulta (2 sub pasos)
     $query = $db->prepare('SELECT * FROM materia');
     $query ->execute();

    //* 3. obtengo la respuesta de la DB
    $materiasdb =  $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODOS los pagos

    return $materiasdb;
}
function getAllCarrera(){

    //* Abrimos una conexion
    $db = new PDO('mysql:host=localhost;'.'dbname=db_facu;charset=utf8', 'root', '');

     //* 2. Enviamos la consulta (2 sub pasos)
     $query = $db->prepare('SELECT * FROM carrera');
     $query ->execute();

    //* 3. obtengo la respuesta de la DB
    $carreradb =  $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODOS los pagos

    return $carreradb;
}
//* Inserta una materia en la DB

function insertMateriaDB( $nombre, $profesor) {
    $db = new PDO('mysql:host=localhost;'.'dbname=db_facu;charset=utf8', 'root', '');

    $query = $db->prepare('INSERT INTO (materia nombre, profesor) VALUES (?, ?)');
    $query->execute([ $nombre, $profesor]);

    //* 3. Obtengo y devuelo el ID del pago nuevos
     return $db->lastInsertId();
}

function deleteMateriaDB($id) {
    $db = new PDO('mysql:host=localhost;'.'dbname=db_facu;charset=utf8', 'root', '');

    $query = $db->prepare('DELETE FROM materia WHERE id=?');
    $query->execute([ $id]);

}

function carrerasCortas(){
    $db = new PDO('mysql:host=localhost;'.'dbname=db_facu;charset=utf8', 'root', '');

    $query = $db->prepare('SELECT * FROM `carrera` WHERE años < 4');
    $query->execute();

    $tresaños=  $query->fetchAll(PDO::FETCH_OBJ);
    return $tresaños;
}



function getCarreraConMateria($carrera) {
    $db = new PDO('mysql:host=localhost;'.'dbname=db_facu;charset=utf8', 'root', '');
    $query = $db->prepare("SELECT materia.*, carrera.nombre as carrera FROM materia JOIN carrera ON materia.id_carrera=? = carrera.id;");
    $query->execute([$carrera]);
    $estudio= $query->fetchAll(PDO::FETCH_OBJ);
    return $estudio;
}
