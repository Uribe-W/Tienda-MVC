<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{
    
    public function index() {
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
         require_once 'views/categoria/index.php';
        
    }
    
    public function ver() {
       if(isset($_GET['id'])){
           $id = $_GET['id'];
           //consegur categoria
           $categoria = new Categoria();
           $categoria->setId($id);
           $categoria =$categoria->getOne();
           
           $producto = new Producto();
           $producto->setCategoria_id($id);
           $productos = $producto->getAllCategoria();
           
       }
        
        
        require_once 'views/categoria/ver.php';
    }
    
    public function crear() {
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }
    
    public function save() {
        Utils::isAdmin();
        
        //Guardar categorias
        if(isset($_POST) && isset($_POST['nombre'])){
            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $categoria->save();
            
        }    
        
        header("location:".base_url."categoria/index");
    }
}
