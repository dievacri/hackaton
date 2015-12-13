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
    <link rel="stylesheet" href="<?= base_url()?>public/css/styles.css" type="text/css">




</head>

<body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background:#82d142">
        <div class="container-fluid">
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
    <br><br><br>
    <div class="container">    
    <div class="row">

        <div class="col-md-2">
            <label>Selec. Transporte</label>
            <select class="form-control">
                <option>Metropolitano</option>
                <option>Corredor Azul</option>
                <option>Tren</option>
                <option>Micro</option>
            </select>
        </div>

        <div class="col-md-4">
        <label>A donde quieres ir?</label>
        <input type="text" class="form-control"><br>

        </div>

        <div class="col-md-12">
            <a href="#" class="btn btn-primary btn-sm">RUTA A</a> 
            <a href="#" class="btn btn-primary btn-sm">RUTA B</a> 
            <a href="#" class="btn btn-primary btn-sm">RUTA C</a> 
            <a href="#" class="btn btn-primary btn-sm">RUTA EXPRESO 4</a> 
            <a href="#" class="btn btn-primary btn-sm">RUTA EXPRERO 2</a> 
        </div>          
    </div><br>   
    
    <div id="map"></div>
    <br>
    <div class="col-md-12">
    <div class="col-md-2">
            <label>RUTA ESCOGIDA</label> <p>C</p>   
        </div>
        <div class="col-md-2">
            <label>TIEMPO ESTIMADO</label> <p>12 minutos</p>   
        </div>
        <div class="col-md-2">
            <label>HR APROX. BUS</label> <p>12:57 m</p>   
        </div>
        <div class="col-md-2">
            <label>INFORMACION 3</label> <p>Comentario 3</p>   
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
    <script src="<?= base_url()?>public/js/gmaps.js"></script>
    <script type="text/javascript" src="<?= base_url()?>public/js/maparuta.js"></script>
</body>

</html>