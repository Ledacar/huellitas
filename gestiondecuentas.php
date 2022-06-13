<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/style/img/Logo-sin texto.png">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3e26a1e3ce.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <link rel="stylesheet" href="../style/css/allpage.css">
    <link rel="stylesheet" href="../style/css/cuenta.css">
</head>
<body>
    <div class="retornar">
        <a href="index.php"><i class="fas fa-angle-left">  Regresar</i></a>
    </div>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página de huellitas</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión en huellitas</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" id="login" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button class="g-recaptcha" 
                        data-sitekey="6LdT-mQgAAAAAGJmWLLj9opGqRvSuEss0uCRbA13" 
                        data-callback='onSubmit' 
                        data-action='submit'>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="" id="registro" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
                        <input type="email" name="correo" id="correo" placeholder="Correo">
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                        <input type="password" name="pass" id="pass" placeholder="Contraseña">
                        <button class="g-recaptcha" 
                        data-sitekey="6LcffmIgAAAAAJMhQpr6F2SHYDgjkXiDAPxlo_sn" 
                        data-callback='onSubmitt' 
                        data-action='submit'>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="../style/js/cuentas.js"></script>
        <script>
            function onSubmit(token) {
              document.getElementById("login").submit();
            }
            function onSubmitt(token) {
                document.getElementById("registro").submit();
              }
        </script>
</body>
</html>