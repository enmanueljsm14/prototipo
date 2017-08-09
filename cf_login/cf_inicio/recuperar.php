<?php include_once("cf_includes/cssgeneral.php"); ?>
  <body class="fp-page">
   <br><br>
    <div class="fp-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>Prototipo</b></a>
            <small>Aplicacion para el control administrativo</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST">
                    <div class="msg">
                        
Ingrese su dirección de correo electrónico que utilizó para registrarse. Te enviaremos un correo electrónico con tu nombre de usuario y un enlace para restablecer tu contraseña.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Correo Electronico" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-teal waves-effect" type="submit"><i class="fa fa-fw -square-o fa-check-circle"></i> RESTABLECER MI CLAVE</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="?modulo=login&directorio=inicio&archivo=login">Iniciar Sesion!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include_once("cf_includes/footer.php"); ?>
<?php include_once("cf_includes/jsgeneral.php"); ?>
