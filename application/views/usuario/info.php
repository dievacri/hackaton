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




</head>

<body style="background:#ECF0F1">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid" style="background:#82d142">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="color:white;">CHAPATUBUS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <br><br><br><br><br><br><br><br><br><br>
       <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                    <!-- <img src="<?= base_url()?>public/img/buscaruta.png"> -->
                        <i class="fa fa-4x fa fa-bus wow bounceIn text-default"></i>
                        <h3>METROPOLITANO</h3>
                        <p class="text-muted">Conoce toda la informacion de los buses que circulan actualmente, su ruta y horarios de trabajo.</p>
                        <p><a href="<?= base_url()?>ruta/" class="btn btn-default">Conocer</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">                    
                    <i class="fa fa-4x fa fa-train wow bounceIn text-default"></i>
                    
                        <h3>TREN</h3>
                        <p class="text-muted">Conoce toda la informacion de los trenes que circulan actualmente, su ruta y horarios de trabajo.</p>
                        <p><a href="<?= base_url()?>info/" class="btn btn-default">Conocer</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">            
                     <i class="fa fa-4x fa fa-subway wow bounceIn text-default"></i>
                        <h3>CORREDOR AZUL</h3>
                        <p class="text-muted">Conoce toda la informacion de los buses que circulan actualmente, su ruta y horarios de trabajo.</p>
                        <p><a href="<?= base_url()?>diversion/" class="btn btn-default">Conocer</a></p>
                    </div>
                </div>
              
            </div>
        </div>
 


    

 <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> 
  <script src="<?= base_url()?>public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url()?>public/js/jquery.easing.min.js"></script>
    <script src="<?= base_url()?>public/js/jquery.fittext.js"></script>
    <script src="<?= base_url()?>public/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url()?>public/js/creative.js"></script>
    <script type="text/javascript" src="<?= base_url()?>public/js/main.js"></script>
</body>

</html>