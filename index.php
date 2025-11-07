<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registros</title>
    <!-- Materialize CSS -->
    <link href="css/materialize.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-color: #f5f5f5;
        }
        main {
            flex: 1 0 auto;
        }
        .hero {
            padding: 100px 0;
            background: linear-gradient(135deg, #2196F3 0%, #1976D2 100%);
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="blue darken-3">
        <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo"><i class="material-icons">people</i> Sistema Registros</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="logica/registro.html"><i class="material-icons left">person_add</i>Registrar Usuario</a></li>
                <li><a href="logica/create.php"><i class="material-icons left">group</i>Ver Usuarios</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container center-align">
            <h1>Bienvenido al Sistema</h1>
            <p class="flow-text">Gestión completa de usuarios con Materialize CSS</p>
            <div class="row">
                <div class="col s12 m6">
                    <a href="logica/registro.html" class="btn-large waves-effect waves-light white blue-text">
                        <i class="material-icons left">person_add</i>
                        Registrar Usuario
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="logica/create.php" class="btn-large waves-effect waves-light white blue-text">
                        <i class="material-icons left">list</i>
                        Ver Usuarios
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-content center-align">
                            <i class="material-icons large blue-text">add_circle</i>
                            <span class="card-title">Crear</span>
                            <p>Registra nuevos usuarios en el sistema</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-content center-align">
                            <i class="material-icons large green-text">edit</i>
                            <span class="card-title">Editar</span>
                            <p>Modifica información de usuarios existentes</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-content center-align">
                            <i class="material-icons large red-text">delete</i>
                            <span class="card-title">Eliminar</span>
                            <p>Remueve usuarios del sistema</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="page-footer blue darken-3">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <p class="white-text center-align">Sistema desarrollado con Materialize CSS - <?php echo date('Y'); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Materialize JavaScript -->
    <script src="js/materialize.min.js"></script>
    <script>
        // Inicializar componentes
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar navbar mobile
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);
        });
    </script>
</body>
</html>