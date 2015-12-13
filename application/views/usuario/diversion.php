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
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <legend><h2>Hoy puedes divertirte en los siguientes lugares</h2></legend>
        </div>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-lg-1 control-label">Distrito</label>
                <div class="col-lg-2">
                  <select class="form-control">
                      <option>San Isidro</option>
                  </select>
                </div>
                <label class="col-lg-1 control-label">Fecha</label>
                <div class="col-lg-2">
                  <select class="form-control">
                      <option>San Isidro</option>
                  </select>
                </div>
            </div>

       </form>
       <div class="col-md-12">
           <table class="table table-condensed">
               <th>Codigo</th>
               <th>Fecha</th>
               <th>Lugar</th>
               <th>Espacio</th>
               <th>Hora</th>
               <th>Categoria</th>
               <th>Evento</th>
               <th>Expositor</th>
               <th>Responsable</th>
               <th>Telefono</th>
               <th>Correo</th>
               <th>Ir</th>
               <?php
                    foreach($eventos as $evetnp){
                        echo "<tr>
                               <td>318</td>
                               <td>10-Dic-2015</td>
                               <td>CC El Olivar</td>
                               <td>Auditoria</td>
                               <td>08:00 pm</td>
                               <td>Teatro</td>
                               <td>\"Asi de Simple\"</td>
                               <td>Wuiton Carreno</td>
                               <td>Victor Mendoza</td>
                               <td>99999999</td>
                               <td>webmaster@chapatubus.com</td>
                               <td><a href=''>Quiero Ir</a></td>
                            </tr>";
                    }
               ?>
           </table>
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