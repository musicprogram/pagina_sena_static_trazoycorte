<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>CFDC SENA</title>

  <!-- Favicons-->
  <link rel="icon" href="images/sena/sena_fondo.jpg" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->    
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.css" type="text/css" rel="stylesheet" media="screen,projection">

  <link href="css/personalized.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">




  

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


  <!-- chartist -->
  <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

  <!-- chartjs -->
  <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
  <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

  <!-- sparkline -->
  <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>

  <!-- google map api -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

  <!--jvectormap-->
  <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>

  <!--google map-->


  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/plugins.min.js"></script>
  <!--custom-script.js - Add your own theme custom JS-->
  <script type="text/javascript" src="js/custom-script.js"></script>
  <!-- Toast Notification -->
  



</head>

<body>
  <!-- Start Page Loading -->


  <!-- End Page Loading -->

  <?php include_once 'pages/header/header.php'?>
  <!-- START HEADER -->

  <!-- END HEADER -->


  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <?php include_once 'pages/sidebar/sidebar.php'?>
      <!-- END LEFT SIDEBAR NAV-->



      <!-- START CONTENT -->
      <section id="content">

       <div class="container">






        <div id="profile-card" class="card">
          <div class="card-image waves-effect waves-block waves-light">

            <img class="activator" src="images/sena/intro.jpg" alt="user background">
          </div>
          <div class="card-content">
            <img src="images/sena/sena_black.png" alt="" class="circle responsive-img activator card-profile-image">



            <div id="contenido" class="separar">

              <?php include_once 'pages/introduccion/introduccion.php'?>    

            </div>

          </div>

        </div>














      </div>
    </section>



  </div>
  <!-- END WRAPPER -->

</div>
<!-- END MAIN -->




<!-- START FOOTER -->
<?php include_once 'pages/footer/footer.php'?>
<!-- END FOOTER -->


</body>

</html>