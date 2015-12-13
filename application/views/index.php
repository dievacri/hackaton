<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?= base_url()?>public/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url()?>public/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?= base_url()?>public/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url()?>public/css/creative.css" type="text/css">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ChapaTuBus</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Sobre Nosotros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#contact">Contactenos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner" >
                <h1 style="text-shadow: #555 5px 10px 5px;">ChapaTuBus</h1>
                <hr>
                <p style="text-shadow: #555 8px 15px 15px;background:black;">Mejorando el transporte publico para todos mediante el uso de la geolocalización</p>
                <a href="<?= base_url()?>usuario/index" class="btn btn-primary btn-xl page-scroll">Conoce nuestra APP</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about" style="background:#82d142">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Nosotros tenemos lo que tu necesitas!</h2>
                    <hr class="light">
                    <p class="text-faded">Brindamos las rutas del transporte público de un punto a otro, geolocalizamos los buses de una ruta para estimar el tiempo al paradero más cercano y al de destino, reconocemos a tiempo real los buses formales y hemos creado un espacio de quejas y sugerencias para mejorar el servicio.</p>
                    <a href="#" class="btn btn-default btn-xl">Empieza Ahora!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nuestras funciones</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-location-arrow  wow bounceIn text-primary"></i>
                        <h3>Encuentra tu ruta</h3>
                        <p class="text-muted">Elije tu mejor ruta vía GPS en tiempo real.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-info-circle wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Informacion Transporte</h3>
                        <p class="text-muted">Accede a la información de la empresas y sus operarios formales.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Atividades Distritales</h3>
                        <p class="text-muted">Enterate de los eventos culturales y las campañas de salud</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Se parte de la Innovación</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contactanos</h2>
                    <hr class="primary">
                    <p>Si tienes alguna duda o sugerencia envianos un correo o llamanos.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">contacto@chapatubus.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?= base_url()?>public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url()?>public/js/jquery.easing.min.js"></script>
    <script src="<?= base_url()?>public/js/jquery.fittext.js"></script>
    <script src="<?= base_url()?>public/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url()?>public/js/creative.js"></script>

</body>

</html>
