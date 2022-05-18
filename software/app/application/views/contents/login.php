<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="<?php echo base_url('images/favicon.png') ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema IoT HYDROCROP</title>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">


  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">


  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="<?php echo base_url('images/touch/ms-touch-icon-144x144-precomposed.png') ?>">
  <meta name="msapplication-TileColor" content="#3372DF">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="http://www.example.com/">
-->

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet')?>">
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('css/lib/getmdl-select.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/lib/nv.d3.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/application.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/hydrocrop.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
  <!-- endinject -->


</head>

<body>

  <div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <center><span class="mdl-card__title-text text-color--smooth-gray">   by Electrónica Gambino </span></center>

    <main class="mdl-layout__content d-flex justify-content-center img-fluid">
    
      <div class="mdl-card__login ">
        <div class=" hc-box-login border p-4">
          <center><a href="https://hydrocrop.net">
              <img src="<?php echo base_url('images/Hydrocrop.png') ?>" class="img-fluid" width="350" height="100" alt="texto alternativo de la imagen" /></a>
          </center>
          <div class="mdl-card__supporting-text color--dark-gray d-flex  ">
            <form class="" action="<?php echo base_url('login/dologin') ?>" method="post">


              <center>
                <div class="mdl-grid d-flex ">
                  <div class="col-12 mt-4">
                    <span class="mdl-card__title-text  hc-color-text-negro">Sistema de Control y Monitoreo</span>
                  </div>
              </center>
              <div class="col-12  mt-4">

                <span class="login-secondary-text text-color--smoke">Ingrese los datos para su acceso a la Plataforma IoT</span>
              </div>
              <div class="col-12  mt-4">
                <div class="mb-3">
                  <input class="mdl-textfield__input hc-form-control" placeholder="Correo Electrónico" type="text" name="email" value="demo@demo.com" id="e-mail">
                  <label class="mdl-textfield__label" for="e-mail"></label>
                </div>
                <div class="">
                  <input class="mdl-textfield__input hc-form-control" placeholder="Contraseña" type="password" id="password" name="password" value="demo0381">
                  <label class="mdl-textfield__label" for="password"></label>
                </div>

              </div>
              <div class="col-12 ">
                <a href="<?php echo base_url('register') ?>" class="login-link ">No eres Cliente?</a>
                <div class="mdl-layout-spacer mb-3"></div>

                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                  INGRESAR
                </button>

              </div>


            </form>
          </div>

        </div>

        <div class="" style="color:red">
          <?php echo $msg ?>
        </div>
      </div>
    </main>
  </div>

  <!-- inject:js -->
  <script src="<?php echo base_url('js/d3.min.js') ?>"></script>
  <script src="<?php echo base_url('js/getmdl-select.min.js') ?>"></script>
  <script src="<?php echo base_url('js/material.min.js') ?>"></script>
  <script src="<?php echo base_url('js/nv.d3.min.js') ?>"></script>
  <script src="<?php echo base_url('js/layout/layout.min.js') ?>"></script>
  <script src="<?php echo base_url('js/scroll/scroll.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/charts/discreteBarChart.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/charts/linePlusBarChart.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/charts/stackedBarChart.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/employer-form/employer-form.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/line-chart/line-charts-nvd3.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/map/maps.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/pie-chart/pie-charts-nvd3.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/table/table.min.js') ?>"></script>
  <script src="<?php echo base_url('js/widgets/todo/todo.min.js') ?>"></script>
  <script src="<?php echo base_url('js/bootstrap.js') ?>"></script>
  <!-- endinject -->

</body>

</html>