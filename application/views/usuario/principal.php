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
<div class="container-fluid">
   <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid" style="background:#82d142">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="color:white">CHAPATUBUS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  <br><br><br><br><br><br><br><br><br><br>
      <section id="services">
        <div class="container">
           
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                    <!-- <img src="<?= base_url()?>public/img/buscaruta.png"> -->
                        <i class="fa fa-4x fa fa-bus wow bounceIn text-success"></i>
                        <h3>Encuentra tu ruta</h3>
                        <p class="text-muted">Elije tu mejor ruta vía GPS en tiempo real para poder movilizarte.</p>
                        <p><a href="<?= base_url()?>ruta/" class="btn btn-default">Ingresar</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">                    
                    <i class="fa fa-4x fa fa-file-text wow bounceIn text-success"></i>
                    
                        <h3>Informacion Transporte</h3>
                        <p class="text-muted">Accede a la información de la empresas y sus operarios formales.</p>
                        <p><a href="<?= base_url()?>info/" class="btn btn-default">Ingresar</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">            
                     <i class="fa fa-4x fa fa-book wow bounceIn text-success"></i>
                        <h3>Actividades Distritales</h3>
                        <p class="text-muted">Enterate de los eventos culturales y las campañas de salud</p>
                        <p><a href="<?= base_url()?>diversion/" class="btn btn-default">Ingresar</a></p>
                    </div>
                </div>
              
            </div>
        </div>
    </section>




    
   
</div>


</body>

</html>