<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'views/shared/partials/head.php'  ?>
</head>

<body>


    <div id="app">

       <!-- menú de navegación -->
       <?php  require_once 'views/shared/partials/nav.php' ?>


       <!-- body -->
        <div id="main">

            <h1>Lista de Usuarios</h1>

            <?php if (count($usuarios) > 0): ?>
            <ul>
                <?php foreach ($usuarios as $usuario): ?>
                <li>ID:
                    <?php echo $usuario['id']; ?> | Nombre:
                    <?php echo $usuario['username'];  ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
            <p>No hay usuarios disponibles.</p>
            <?php endif; ?>

            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>


        </div>
    </div>


    <!-- scripts -->
    <?php  require_once 'views/shared/partials/scripts.php' ?>

</body>

</html>