<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../mazer/css/bootstrap.css">
    <link rel="stylesheet" href="../mazer/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../mazer/css/app.css">
    <link rel="stylesheet" href="../mazer/css/pages/auth.css">
    <link rel="stylesheet" href="../css/site.css">
</head>

<body>

    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="../mazer/images/logo/logoF.png" alt="Logo" style="height: 4rem;"></a>
                    </div>
                    <h1 class="auth-title">Acceso</h1>

                    <form asp-action="Login" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Usuario" name="usuario"
                                required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Contraseña"
                                name="password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Acceder</button>
                    </form>

                    <div class="text-center mt-5 text-lg fs-4">
                        <p><a class="font-bold" href="auth-forgot-password.html">Recordar contraseña</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <div id="auth-right" style="height: 100%; background-color: lightgray;">
        
                </div>
            </div>
        </div>
    </div>

</body>

</html>
