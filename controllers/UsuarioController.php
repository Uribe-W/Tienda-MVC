<?php
require_once 'models/usuario.php';

class usuarioController{
    
    public function index() {
        echo 'controlador usuario, accion index';
        
    }
    
    public function registro() {
        require_once 'views/usuario/registro.php';
        
    }
    public function save() {
        if(isset($_POST)){
           $usuario = new Usuario();
           $usuario->setNombre($_POST['nombre']);
           $usuario->setApellido($_POST['apellido']);
           $usuario->setEmail($_POST['email']);
           $usuario->setPassword($_POST['password']);
           
           $save = $usuario->save();
           if($save){
               $_SESSION['register'] = "complete";
           }else{
                $_SESSION['register'] = "failed";
           }
        }else{
            $_SESSION['register'] = "failed";
            
        }
        header("location:".base_url.'usuario/registro');
    }
}

