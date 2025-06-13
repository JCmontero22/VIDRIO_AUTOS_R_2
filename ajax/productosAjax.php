<?php 

    require_once('../controller/productosController.php');

    $accion = $_POST['accion'] ?? $_GET['accion'];

    $productoos = new productosController();

    switch($accion){
        case '1':
            $respuesta = $productoos->listadoProductos();
            echo json_encode($respuesta);
        break;

        case '2':
            $respuesta = $productoos->producto($_GET['id_producto']);
            echo json_encode($respuesta);
            break;

        default:
            echo 'Error';
        break;
    }