<h1>Registrarse</h1>
<?php if(isset($_SESSION['register']) && $_SESSION['register']):?>
    <strong>Registro completado</strong>
<?php else:?>
    <strong>Registro Fallido</strong>
<?php endif;?>
    
<form action="<?=base_url?>usuario/save" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required/>
    
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" required/>
    
    <label for="email">Email</label>
    <input type="email" name="email" required/>
    
    <label for="password">Contraseña</label>
    <input type="password" name="password" required/>
    
    <input type="submit" value="Registrarse"/>
        
    
</form>
 