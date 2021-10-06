<?php
require_once 'db.php';


function showMaterias() {
    include './templates/header.php';
    include './templates/form_alta.php';
    // pido las tareas a la DB
    $materias = getAllMaterias();
    $carreras = getAllCarrera();
    $tresaños=carrerasCortas();
     
    echo '<ul class="list-group list-unstyled mt-5">';
    foreach($carreras as $carrera) {

        echo "<li class='list-group-item-success'>$carrera->nombre <li> 
        <a class='btn btn-danger' href='mostrar/$carrera->id'>Mostra plan de estudio</a></li>";

           
            
    }
    echo "</ul>";

    echo '<ul class="list-group list-unstyled mt-5">';
    foreach($materias as $materia) {

            echo "<li class='list-group-item-success'>$materia->nombre - $materia->profesor - <li> 
            <a class='btn btn-danger' href='borrar/$materia->id'>Borrar</a></li>";
            
    }
    echo "</ul>";
    echo"<h1>Carreras De Tres Años O Menos</h1>";
    echo '<ul class="list-group list-unstyled mt-5">';
    foreach($tresaños as $tresaño) {

            echo "<li class='list-group-item-success'>$tresaño->nombre nombre -$tresaño->años -  años<li>"; 
            
            
    }
    echo "</ul>";


    include './templates/footer.php';

    include './templates/footer.php';
}

function showCarrera($carrera){
    $estudio=$carrera;
    $materias=getCarreraConMateria($estudio);
  
    include './templates/header.php';
    include './templates/form_alta.php';
    echo '<ul class="list-group list-unstyled mt-5">';
    foreach($materias as $materia) {

            echo "<li class='list-group-item-success'>$materia->nombre - $materia->profesor - <li>"; 
            
            
    }
    echo "</ul>";
  

}

function addMaterias(){
    $nombre = $_REQUEST['materia'] ;
    $profesor =  $_REQUEST['profesor'] ;
  
    
    insertMateriaDB($nombre, $profesor);
   
    // redirijo al home
    header("Location: " . BASE_URL);
}

function busMaterias(){
    include './templates/header.php';
    include './templates/form_alta.php';
    $buscar = $_REQUEST['buscador'] ;

    $busquedas=buscarMateriaDB($buscar);

    echo '<ul class="list-group list-unstyled mt-5">';
    foreach($busquedas as $busqueda) {

            echo "<li class='list-group-item-success'>$busqueda->nombre - $busqueda->profesor - <li>";
            
    }
    echo "</ul>";

    include './templates/footer.php';
}

function deleteMaterias($id){

    $delete=deleteMateriaDB($id);


    
     // redirijo al home
     header("Location: " . BASE_URL);
}