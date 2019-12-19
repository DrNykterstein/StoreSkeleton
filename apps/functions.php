<?php

function getProducto(){
    $product = require_once APPS.'productos.php';
    return $product;
}

//Funcion para renderizar los include
function renderIncludes($includes, $data=[]){
    if(!is_file(INCLUDES.$includes)){
        echo 'No Existe el archivo a incluir';
        die();
    }
    require_once INCLUDES.$includes;
}

//Funcion para renderizar vistas
function renderViews($views, $data=[]){
    if(!is_file(VIEWS.$views)){
        echo 'No Existe la vista';
        die();
    }
    require_once VIEWS.$views;
}



?>