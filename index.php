<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        <!<!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta logo"/>
                <a href="index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>
        
        <!<!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="inicio">inicio</a>
                </li>
                <li>
                    <a href="#">Categoria 1</a>
                </li>
                <li>
                    <a href="#">Categoria 2</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
                <li>
                    <a href="#">Categoria 3</a>
                </li>
                <li>
                    <a href="#">Categoria 4</a>
                </li>
                <li>
                    <a href="#">Categoria 5</a>
                </li>
            </ul>
        </nav>
        
        <div id="content">
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <form action="#" method="post">
                        
                        <label for="email">email</label>
                        <input type="email" name="email"/>
                        
                        <label for="password">password</label>
                        <input type="password" name="password"/>
                        
                        <input type="submit" value="Enviar"/>
                    </form>
                    
                    <a href="#">Mis Pedidos</a>
                    <a href="#">Gestionar Pedidos</a>
                    <a href="#">Gestionar Categoria</a>
                </div>
                
            </aside>
            <div id="central">
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">comprar</a>
                </div>
                
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">comprar</a>
                </div>
                
                <div class="product">
                    <img src="assets/img/camiseta.png"/>
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 euros</p>
                    <a href="#">comprar</a>
                </div>
                
            </div>
        </div>
        
        <!<!-- PIE DE PAGINA -->
        <footer>
            <p> Desarrollado por Wilson Uribe &copy; <?=date('Y')?></p>
        </footer>
    </body>
</html>
