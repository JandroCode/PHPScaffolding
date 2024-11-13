<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'views/shared/partials/head.php'  ?>
</head>
<body>

<?php $dominio = '/mazer' ?>


    <div id="error">
        <div class="error-page container mt-5">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <h1 class="error-title">NO ENCONTRADA</h1>
                    <p class='fs-5 text-gray-600'>La página que buscas no se encuentra disponible.</p>
                    <a href="<?= $dominio ?>/index.php" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>