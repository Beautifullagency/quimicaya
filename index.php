<?php
//config de servidor
$result="";
if(isset($_POST['submit'])) {
    require './pags/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host='vps-1218735-x.dattaweb.com';
    $mail->Port=465;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='ssl';
    $mail->Username='infoquimica@quimicaya.com.ar';
    $mail->Password='Quimica20ya';
//config de destinatario
    $mail->setFrom($_POST['email'],$_POST['nombre']);
    $mail->addAddress('infoquimicaya@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['nombre']);
// mail respuesta
    $mail->isHTML(true);
    $mail->Subject='enviado por '.$_POST['nombre'];
    $mail->Body='<h1 align=center>Nombre: '.$_POST['nombre'].'<br>Email: '.$_POST['email'].'<br>Mensaje: '
    .$_POST['mensaje'].'</h1>';

    if(!$mail->send()) {
    
     $result="algo anda mal intentelo nuevamente";
    } else {
       $result="gracias " .$_POST['nombre']." por contactarnos, te responderemos en la brevedad ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quimica Ya!</title>
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body>
    <div id="loaderGeneral">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-auto">
                <button></button >
            </div>
        </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <div class="row w-100 align-items-center justify-content-between">
                    <div class="col">
                        <div class="row align-items-center logoContainer">
                            <div class="col-auto">
                                <a class="navbar-brand" href="index.php">
                                    <img src="img/logo.png" class="logotipo"/>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a class="navbar-brand" href="index.php"><h1>Quimica Ya!</h1></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row align-items-center">
                            <div class="col-auto contenedorNavbarMenu">
                                <div class="collapse navbar-collapse" id="navbarMenu">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown">
                                            <a id="navProductos" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
                                            <div class="dropdown-menu" aria-labelledby="navProductos">
                                                <a class="dropdown-item" href="linea_mata_bichos.html">Linea Mata Bichos</a>
                                                <a class="dropdown-item" href="linea_fertilizante.html">Linea Fertilizantes</a>
                                                <a class="dropdown-item" href="linea_limpieza.html">Linea Limpieza</a>
                                                <a class="dropdown-item" href="linea_plastico.html">Linea Plasticos y Accesorios</a>
                                                <a class="dropdown-item" href="linea_pileta.html">Linea Piletas</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown d-none">
                                            <a id="navModelos" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Modelos de negocio</a>
                                            <div class="dropdown-menu" aria-labelledby="navModelos">
                                                <a class="dropdown-item" href="#">Agente de ventas</a>
                                                <a class="dropdown-item" href="#">Distribuidor</a>
                                                <a class="dropdown-item" href="#">Gondola Quimica Ya!</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modelos_de_negocio.html">Modelos de negocio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="nosotros.html">Nosotros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contacto.html">Contacto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto border-left">
                                <ul class="navSociales">
                                    <li>
                                        <a href="https://www.facebook.com/pg/Quimica-Ya-479261352597294/about/?ref=page_internal" target="_blank">
                                            <span class="fa-stack fa-lg">
                                              <i class="fa fa-circle fa-stack-2x"></i>
                                              <i class="fa fa-facebook-f fa-stack-1x"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/pg/Quimica-Ya-479261352597294/about/?ref=page_internal" target="_blank">
                                            <span class="fa-stack fa-lg">
                                              <i class="fa fa-circle fa-stack-2x"></i>
                                              <i class="fa fa-instagram fa-stack-1x"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/pg/Quimica-Ya-479261352597294/about/?ref=page_internal" target="_blank">
                                            <span class="fa-stack fa-lg">
                                              <i class="fa fa-circle fa-stack-2x"></i>
                                              <i class="fa fa-youtube-play fa-stack-1x"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars text-white" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <div class="container-fluid sliderContainer">
        <div class="row">
            <div class="col-12 p-0">
                <div class="bxslider">
                    <div><img src="img/slide1.jpg" /></div>
                    <div><img src="img/slide2.jpg" /></div>
                    <div><img src="img/slide3.jpg" /></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container descripcionEmpresa">
        <div class="row">
            <div class="col-12 text-center logoMini">
                <img src="img/logoMin.png"/>
            </div>
            <div class="col-12 text-center descripcion">
                <h2 class="mt-3 mb-4"><strong>Quimica Ya!</strong></h2>
                <p>Quimica Ya! Es una empresa argentina que elabora  productos de maxima calidad y performance superior, ofreciendolos en todo el pais. Esto, junto con sus principios y valores fundacionales - excelencia en el trabajo, y cuidado de su  gente, la comunidad y el medio ambiente - son los pilares de su crecimiento y liderazgo.</p>
            </div>
            <div class="col-12 col-md itemServicio">
                <img src="img/servicio1.png" height="125" width="125"/>
                <p><strong>M??s de 60 productos</strong><br>forman parte de nuestra<br>l??nea de soluciones</p>
            </div>
            <div class="col-12 col-md itemServicio">
                <img src="img/servicio2.png" height="125" width="125"/>
                <p><strong>Amplia red log??stica</strong><br>llevamos nuestro<br>productos a todo el pa??s</p>
            </div>
            <div class="col-12 col-md itemServicio">
                <img src="img/servicio3.png" height="125" width="125"/>
                <p><strong>Estamos en todo el pa??s</strong><br>con distribuidores en<br>puntos estrat??gicos</p>
            </div>
        </div>
    </div>

    <div class="contenedorWhatsapp">
        <a href="https://wa.me/5493514385851?text=Hola,%20quisiera%20recibir%20mas%20informaci??n%20sobre%20Quimica%20Ya!" target="_blank" title="Recib?? m??s informaci??n"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    </div>
            <div class="container mt-5"> 
                <div class="row">
                  <div class="col-12 col-md-6 formularioContacto mb-5 mb-md-0">
                 <h2>Formulario de contacto</h2>
                 <form id="formularioContacto" action="index.php" method="post">
                    <div class="form-group">
                        <!--<label>??rea a la cual se dirige</label>-->
                    </div>
                    <div class="form-group">
                        <!--<label>Nombre y Apellido</label>-->
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido">
                    </div>
                    <div class="form-group">
                        <!--<label>Email</label>-->
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <!--<label>Telefono</label>-->
                        <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <!--<label>Asunto</label>-->
                        <input type="text" name="asunto" class="form-control" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <!--<label>Mensaje</label>-->
                        <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="espenv">
                        <button type="submit" name="submit">Enviar</button>
                        <h5 class="notifCorrecto"> <?= $result; ?></h5>
                    </div>
                 </form>
                 <section class="btn-in-con" id="btn-in">
                    <a href="../index.html">Regresar</a>
                 </section>    
                                    
             </div>                     
             </section>
             <div class="col-12 col-md-6 datosContacto">
                <h2>Datos de contacto</h2>
                <p>
                    <strong>Quimica Ya!</strong>
                    <br>
                    C??rdoba - Argentina
                </p>
                <p>
                    <strong>Tel. Centro de Distribuci??n C??rdoba:</strong>
                    <br>
                    (351) 803 - 4167
                </p>
                <p>
                    <strong>Contacto Comercial<br>Nuevas unidades de Negocio:</strong>
                    <br>
                    <a href="mailto:comercial@quimicaya.com.ar">comercial@quimicaya.com.ar</a>
                </p>
                <p>
                    <strong>Trabaja con Nosotros<br>Recepci??n de CV:</strong>
                    <br>
                    <a href="mailto:empleos@quimicaya.com.ar">empleos@quimicaya.com.ar</a>
                </p>
                <p>
                    <strong>Ventas / Pedidos:</strong>
                    <br>
                    <a href="mailto:ventas@quimicaya.com.ar">ventas@quimicaya.com.ar</a>
                </p>
                <p>
                    <strong>Compras / Proveedores:</strong>
                    <br>
                    <a href="mailto:compras@quimicaya.com.ar">compras@quimicaya.com.ar</a>
                </p>
                <p>
                    <strong>Contacto General:</strong>
                    <br>
                    <a href="mailto:info@quimicaya.com.ar">info@quimicaya.com.ar</a>
                </p>
            </div>

        </div>
    </div>
    <footer class="py-2 bg-dark text-white-50">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <p>
                        <small>2019 Copyright &copy; Quimica Ya!</small>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>