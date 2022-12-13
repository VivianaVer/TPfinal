<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="./css/estilo.css" rel="stylesheet">
</head>
<body class="text-center bg-light">
<header>
        <nav>
            <div id="header">
                <ul class="nav">
                    <li><a href="home.html">Inicio</a></li>
                    <li><a href="">Usuarios</a>
                        <ul>
                            <li><a href="altaUsuarioC.html">Crear Usuario</a></li>
                            <li><a href="listadoUsuarios.php">Listado de Usuarios</a></li>
                        </ul>
                    </li>
                    <li><a href="">Pedidos</a>
                        <ul>
                            <li><a href="listadoPedidos.php">Listado de Pedidos</a></li>
                            <li><a href="pedidoC.php">Cargar Pedido</a></li>
                        </ul>
                    </li>

                    <li><a href="">Acerca de</a>
                        <ul>
                            <li><a href="">Nosotros</a></li>
                            <li><a href="">Nuestra Misión</a></li>
                            <li><a href="http://www.facebook.com">Historia</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="py-4 text-center">
            <img class="d-block mx-auto mb-4" src="./images/logo.jpg" alt="logo" width="72" height="72">
            <h3>Usuarios</h3>
            <p class="lead">Listado de usuarios existentes</p>
        </div>
        
        <table class="table table-hover table-sm table-light">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>#ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                </tr>
                <?php
                require_once("../DAO/UsuarioDAO.php");
                $userDAO = new UsuarioDAO();
                $listUsu=$userDao->listadoUsuarios();
                foreach ($lisUsu as $user) {
                    echo "<tr>";
                    echo "<td>";
                    echo $user->getIdUsuario();
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>