<?php

require_once 'models/producto.php';

class carritoController {

    public function index() {
        var_dump($_SESSION);
        echo 'controlador carrito, accion index';
    }

    public function add() {
        if ($_GET['id']) {
            $producto_id = $_GET['id'];
        } else {
            header('location:' . base_url);
        }

        if (isset($_SESSION['carrito'])) {
            $counter = 0;
            foreach ($_SESSION['carrito'] as $indice => $elemento){
                if($elemento['id_producto'] == $producto_id){
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $counter++;
                }
            }           
        }
        
        if(!isset($counter)|| $counter == 0){
            //conseguir producto
            $producto = new Producto;
            $producto->setId($producto_id);
            $producto = $producto->getOne();
           
            
            //añadir al carrito
            if (is_object($producto)) {
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }
        }
        
        header('location:'.base_url.'carrito/index');
    }

    public function remove() {
        
    }

    public function delete_all() {
        unset($_SESSION['carrito']);
        header('location:'.base_url.'carrito/index');
    }

}
