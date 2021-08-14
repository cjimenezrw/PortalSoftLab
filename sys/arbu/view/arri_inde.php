<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<center><h3>"Por que a nosotros si nos importa mucho tener un Puerto Inteligente y Seguro"<br>- SoftLab</h3></center>

<table id="example" class="display" style="width:100%">
   <thead>
      <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
      </tr>
   </thead>
   <tbody>
      <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
      </tr>
      <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
      </tr>
   </tbody>
   <tfoot>
      <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
      </tr>
   </tfoot>
</table>


<script src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/js/<?php echo VERSION; ?>/<?php echo $this->sysModule; ?>.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
!-->


<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <![endif]-->
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="apple-touch-icon" href="https://5studios.net/themes/dashcore3/apple-touch-icon.png">
      <link rel="icon" href="<?php echo SYS_URL.'core/assets/tpl/images/favicon.png'; ?>">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
      <title>SoftLab</title>
      <!-- themeforest:css -->
      <link rel="stylesheet" href="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/css/lib.min.css">
      <link rel="stylesheet" href="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/css/dashcore.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
      <!-- endinject -->
   </head>
   <body>
      <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]--><!-- ./Making stripe menu navigation -->
      <nav class="st-nav navbar main-nav navigation fixed-top" id="main-nav">
         <div class="container">
            <ul class="st-nav-menu nav navbar-nav">
               <li class="st-nav-section nav-item"><a href="automate-social.html#main" class="navbar-brand"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/logo.png" alt="Dashcore" class="logo logo-sticky d-inline-block d-md-none"> <img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/logo-light.png" alt="Dashcore" class="logo d-none d-md-inline-block"></a></li>
               <!--<li class="st-nav-section st-nav-primary nav-item"><a class="st-root-link nav-link" href="#">Portal SoftLab</a></li>!-->
               <li class="st-nav-section st-nav-secondary nav-item"><a class="btn btn-rounded btn-outline me-3 px-3" href="login.html" target="_blank"><i class="fas fa-sign-in-alt d-none d-md-inline me-md-0 me-lg-2"></i> <span class="d-md-none d-lg-inline">Iniciar Sesión</span> </a></li>
               <!-- Mobile Navigation -->
               <li class="st-nav-section st-nav-mobile nav-item">
                  <button class="st-root-link navbar-toggler" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                  <div class="st-popup">
                     <div class="st-popup-container">
                        <a class="st-popup-close-button">Cerrar</a>
                        <div class="st-dropdown-content-group">
                           <h4 class="text-uppercase regular">Contenido</h4>
                           <a class="regular text-primary" href="about.html"><i class="far fa-building me-2"></i> Inicio </a>
                        </div>
                        <div class="st-dropdown-content-group bg-light b-t"><a href="https://portal.softlab.mx/">Iniciar Sesión <i class="fas fa-arrow-right"></i></a></div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
      <main class="overflow-hidden">
         <!-- ./Page header -->
         <header class="section header text-contrast automate-social-header">
            <div class="shape-wrapper">
               <div class="shape shape-background shape-main gradient gradient-blue-purple"></div>
               <div class="shape shape-background shape-main shadow"></div>
               <div class="shape shape-background shape-top"></div>
               <div class="shape shape-background shape-right"></div>
            </div>
            <div class="container overflow-hidden">
               <div class="row gap-y">
                  <div class="col-lg-6">
                     <h1 class="text-contrast extra-bold display-md-3 display-lg-2 font-lg mb-5">Portal
                     <span class="d-block light font-md">SoftLab</span></h1>
                     <p class="text-contrast lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dolore excepturi explicabo, harum in laudantium nulla officiis reprehenderit!</p>
                     <a class="btn btn-rounded btn-primary btn-lg rounded-pill" href="https://softlab.mx/#contact">
                        <i class="fa fa-rocket d-inline d-md-none"></i> <span class="d-none d-md-inline">Contáctanos</span>
                     </a>
                     <!--
                     <form action="https://5studios.net/themes/dashcore3/srv/register.php" class="form" data-response-message-animation="slide-in-left" novalidate>
                        <div class="input-group-register py-4"><input type="email" name="Subscribe[email]" class="form-control shadow-lg bg-contrast rounded-pill" placeholder="Enter your email" required=""> <button class="btn btn-rounded btn-primary btn-lg rounded-pill" type="submit"><i class="fa fa-rocket d-inline d-md-none"></i> <span class="d-none d-md-inline">Start Free Trial</span></button></div>
                     </form>
                     !-->
                     <!--<div class="response-message">
                        <i class="fas fa-envelope font-lg"></i>
                        <p class="font-md m-0">Check your email</p>
                        <p class="response">We sent you an email with a link to get started. You’ll be in your account in no time.</p>
                     </div>!-->
                  </div>
               </div>
            </div>
            <div class="main-shape-wrapper">
               <div class="bubbles-wrapper">
                  <div data-aos="fade-up">
                     <figure><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/main-shape.svg" class="img-responsive main-shape floating" alt=""></figure>
                  </div>
                  <ul class="animations m-0">
                     <li class="bubble icon icon-xxl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/like.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/smile.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-lg"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/heart.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/heart.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xxl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/smile.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/like.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xxl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/smile.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/heart.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-lg"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/smile.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/like.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xxl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/like.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/heart.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xxl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/like.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/heart.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-lg"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/smile.svg" alt="" class="img-responsive"></li>
                     <li class="bubble icon icon-xl"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/header/like.svg" alt="" class="img-responsive"></li>
                  </ul>
               </div>
            </div>
         </header>
         <!-- Features Carousel -->
         <section class="section features-carousel b-b">
            <div class="container pt-0">
               <div class="cards-wrapper">
                  <div class="swiper-container" data-sw-autoplay="3500" data-sw-loop="true" data-sw-nav-arrows=".features-nav" data-sw-show-items="1" data-sw-space-between="30" data-sw-breakpoints='{"768": {"slidesPerView": 3}, "992": {"slidesPerView": 4}}'>
                     <div class="swiper-wrapper px-1">
                        <div class="swiper-slide px-2 px-sm-1">
                           <div class="card border-0 shadow">
                              <div class="card-body">
                                 <div class="logo mx-auto my-3"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/icons/1.svg" class="img-responsive" alt=""></div>
                                 <hr class="w-50 mx-auto my-3">
                                 <p class="bold mt-4">Social Integration</p>
                                 <p class="regular small text-secondary">Consequuntur ea sapiente ut</p>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-around">
                                 <div class="roi">
                                    <p class="text-darker lead bold mb-0">1.5k</p>
                                    <p class="text-secondary small mt-0">New subscribers</p>
                                 </div>
                                 <a href="javascript:;"><i class="fas fa-info-circle fa-2x"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1">
                           <div class="card border-0 shadow">
                              <div class="card-body">
                                 <div class="logo mx-auto my-3"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/icons/2.svg" class="img-responsive" alt=""></div>
                                 <hr class="w-50 mx-auto my-3">
                                 <p class="bold mt-4">Design Strategy</p>
                                 <p class="regular small text-secondary">Alias eum expedita illo rem!</p>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-around">
                                 <div class="roi">
                                    <p class="text-darker lead bold mb-0">1.5k</p>
                                    <p class="text-secondary small mt-0">New subscribers</p>
                                 </div>
                                 <a href="javascript:;"><i class="fas fa-info-circle fa-2x"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1">
                           <div class="card border-0 shadow">
                              <div class="card-body">
                                 <div class="logo mx-auto my-3"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/icons/3.svg" class="img-responsive" alt=""></div>
                                 <hr class="w-50 mx-auto my-3">
                                 <p class="bold mt-4">Save Money</p>
                                 <p class="regular small text-secondary">Consectetur adipisicing elit</p>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-around">
                                 <div class="roi">
                                    <p class="text-darker lead bold mb-0">1.5k</p>
                                    <p class="text-secondary small mt-0">New subscribers</p>
                                 </div>
                                 <a href="javascript:;"><i class="fas fa-info-circle fa-2x"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1">
                           <div class="card border-0 shadow">
                              <div class="card-body">
                                 <div class="logo mx-auto my-3"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/icons/4.svg" class="img-responsive" alt=""></div>
                                 <hr class="w-50 mx-auto my-3">
                                 <p class="bold mt-4">Business Brain</p>
                                 <p class="regular small text-secondary">Rem repellendus rerum, vel!</p>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-around">
                                 <div class="roi">
                                    <p class="text-darker lead bold mb-0">1.5k</p>
                                    <p class="text-secondary small mt-0">New subscribers</p>
                                 </div>
                                 <a href="javascript:;"><i class="fas fa-info-circle fa-2x"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1">
                           <div class="card border-0 shadow">
                              <div class="card-body">
                                 <div class="logo mx-auto my-3"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/icons/5.svg" class="img-responsive" alt=""></div>
                                 <hr class="w-50 mx-auto my-3">
                                 <p class="bold mt-4">Worldwide Support</p>
                                 <p class="regular small text-secondary">Consectetur adipisicing elit</p>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-around">
                                 <div class="roi">
                                    <p class="text-darker lead bold mb-0">1.5k</p>
                                    <p class="text-secondary small mt-0">New subscribers</p>
                                 </div>
                                 <a href="javascript:;"><i class="fas fa-info-circle fa-2x"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1">
                           <div class="card border-0 shadow">
                              <div class="card-body">
                                 <div class="logo mx-auto my-3"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/icons/6.svg" class="img-responsive" alt=""></div>
                                 <hr class="w-50 mx-auto my-3">
                                 <p class="bold mt-4">Social Settings</p>
                                 <p class="regular small text-secondary">Facilis numquam odio sit amet.</p>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-around">
                                 <div class="roi">
                                    <p class="text-darker lead bold mb-0">1.5k</p>
                                    <p class="text-secondary small mt-0">New subscribers</p>
                                 </div>
                                 <a href="javascript:;"><i class="fas fa-info-circle fa-2x"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1">
                           <div class="card border-0 shadow">
                              <div class="card-body">
                                 <div class="logo mx-auto my-3"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/icons/7.svg" class="img-responsive" alt=""></div>
                                 <hr class="w-50 mx-auto my-3">
                                 <p class="bold mt-4">Insightful Statistics</p>
                                 <p class="regular small text-secondary">facere quasi rem suscipit!</p>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-around">
                                 <div class="roi">
                                    <p class="text-darker lead bold mb-0">1.5k</p>
                                    <p class="text-secondary small mt-0">New subscribers</p>
                                 </div>
                                 <a href="javascript:;"><i class="fas fa-info-circle fa-2x"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Add Arrows -->
                     <div class="text-primary features-nav features-nav-next"><span class="text-uppercase small">Next</span> <i class="features-nav-icon fas fa-long-arrow-alt-right"></i></div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ./Get Started -->
         <section class="section get-started">
            <div class="container bring-to-front">
               <div class="section-heading text-center">
                  <h2 class="extra-bold">Por que a nosotros SI NOS IMPORTA MUCHO tener un <span style="text-decoration:underline;">Puerto Inteligente y Seguro</span></h2>
                  <p class="lead text-muted"><span class="text-primary">SoftLab</span> - El <b>Software</b> que su Empresa <b>Necesita</b></p>
               </div>
               <div class="pb-8 position-relative">
                  <div class="browser shadow-lg mx-auto" data-aos="fade-up" style="width:100% !important">
                     <div class="screen">
                        <table id="example" class="display" style="width:100% !important">
   <thead>
      <tr>
            <th>Código</th>
            <th>C. Puerto</th>
            <th>C. Atraque</th>
            <th>T. Tráfico</th>
            <th>Buque</th>
            <th>Naviera</th>
            <th>Viaje</th>
            <th>F. Inicio Operaciones</th>
            <th>F. Término Operaciones</th>
            <th>Bandera</th>
            <th>Indicativo Llama</th>
      </tr>
   </thead>
   <tbody>
      <?php
         if(isset($data['get_buques_arribos']) && !empty($data['get_buques_arribos'])){
            foreach($data['get_buques_arribos'] AS $k=>$v){
      ?>
      <tr>
            <td><?php echo $v['sCodigo']; ?></td>
            <td><?php echo $v['sCodigoPuerto']; ?></td>
            <td><?php echo $v['sCodigoAtraque']; ?></td>
            <td><?php echo $v['sTipoTrafico']; ?></td>
            <td><?php echo $v['sNombre']; ?></td>
            <td><?php echo $v['sLineaNaviera']; ?></td>
            <td><?php echo $v['sViaje']; ?></td>
            <td><?php echo (!empty($v['dFechaInicioOperaciones']) ? date('d/m/Y H:i:s', strtotime($v['dFechaInicioOperaciones'])) : NULL); ?></td>
            <td><?php echo (!empty($v['dFechaTerminoOperaciones']) ? date('d/m/Y H:i:s', strtotime($v['dFechaTerminoOperaciones'])) : NULL); ?></td>
            <td><?php echo $v['sBandera']; ?></td>
            <td><?php echo $v['sIndicativoLlamada']; ?></td>
      </tr>
      <?php
            }//ENDFORECH
         }//ENDIF
      ?>
   </tbody>
   <tfoot>
      <tr>
            <th>Código</th>
            <th>C. Puerto</th>
            <th>C. Atraque</th>
            <th>T. Tráfico</th>
            <th>Buque</th>
            <th>Naviera</th>
            <th>Viaje</th>
            <th>F. Inicio Operaciones</th>
            <th>F. Término Operaciones</th>
            <th>Bandera</th>
            <th>Indicativo Llama</th>
      </tr>
   </tfoot>
</table>
                     </div>
                  </div>
                  <!--
                  <div class="floating-box bg-contrast">
                     <div class="p-4 p-lg-5 shadow-lg rounded text-center">
                        <p class="lead">Communicate better, put all your customer information in one single place, get insights and stats in a nutshell</p>
                        <p class="handwritten highlight font-md mt-5">No credit card needed</p>
                        <a href="javascript:;" class="btn btn-rounded btn-lg btn-primary px-4">Start Now</a>
                        <hr class="w-50 mx-auto my-4">
                        <p class="small text-secondary">By registering you will get 14 days of free access to the full featured solution</p>
                     </div>
                  </div>
                  !-->
               </div>
            </div>
         </section>
         <!-- ./Why Us -->
         <section class="section why-us">
            <div class="shapes-container">
               <div class="absolute shape-background top right"></div>
            </div>
            <div class="container">
               <div class="section-heading text-center">
                  <h2 class="bold">API REST</h2>
                  <p class="lead text-secondary">Consulta de Arribos y Buques</p>
               </div>
               <div class="row gap-y">
                  <div class="col-md-5 position-relative">
                     <ul class="list-unstyled why-icon-list">
                        <li class="list-item">
                           <div class="d-flex align-items-start">
                              <div class="rounded-circle bg-info shadow-info text-contrast p-3 icon-xl d-flex align-items-center justify-content-center me-3"><i data-feather="cloud" width="36" height="36" class="cloud"></i></div>
                              <div class="flex-fill">
                                 <h5 class="bold">Integrations</h5>
                                 <p class="my-0">Aut debitis deserunt ea explicabo hic id incidunt, minus</p>
                              </div>
                           </div>
                        </li>
                        <li class="list-item">
                           <div class="d-flex align-items-start">
                              <div class="rounded-circle bg-success shadow-success text-contrast p-3 icon-xl d-flex align-items-center justify-content-center me-3"><i data-feather="dollar-sign" width="36" height="36" class="dollar-sign"></i></div>
                              <div class="flex-fill">
                                 <h5 class="bold">Payments</h5>
                                 <p class="my-0">Amet assumenda aut consequatur, corporis dolorum ea esse</p>
                              </div>
                           </div>
                        </li>
                        <li class="list-item">
                           <div class="d-flex align-items-start">
                              <div class="rounded-circle bg-alternate shadow-alternate text-contrast p-3 icon-xl d-flex align-items-center justify-content-center me-3"><i data-feather="thumbs-up" width="36" height="36" class="thumbs-up"></i></div>
                              <div class="flex-fill">
                                 <h5 class="bold">Marketing</h5>
                                 <p class="my-0">Aliquam amet assumenda debitis dicta distinctio eaque enim</p>
                              </div>
                           </div>
                        </li>
                        <li class="list-item">
                           <div class="d-flex align-items-start">
                              <div class="rounded-circle bg-danger shadow-danger text-contrast p-3 icon-xl d-flex align-items-center justify-content-center me-3"><i data-feather="pie-chart" width="36" height="36" class="pie-chart"></i></div>
                              <div class="flex-fill">
                                 <h5 class="bold">Analytics</h5>
                                 <p class="my-0">Accusantium consequuntur eaque eius itaque labore, neque</p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-7">
                     <figure data-aos="fade-left"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/automate-social/build.svg" class="img-responsive" alt=""></figure>
                  </div>
               </div>
               <!--
               <div class="mt-5 text-center">
                  <a href="javascript:;" class="btn btn-primary btn-rounded">Register for a free demo</a>
                  <p class="small">- or -</p>
                  <a href="javascript:;" class="btn btn-link">Contact us</a>
               </div>
               !-->
            </div>
         </section>
         <!-- ./Advanced Marketing Automation Solution -->
         <section class="section text-contrast advanced-automation-solution overflow-hidden">
            <div class="shape-wrapper">
               <div class="shape shape-background mountain top shape-left"></div>
            </div>
            <div class="container">
               <div class="section-heading text-center">
                  <h2 class="bold text-contrast">Portal SoftLab</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequatur dicta, dignissimos fugiat nisi rerum similique voluptates? Aspernatur at beatae excepturi laboriosam molestiae quae reprehenderit sit suscipit tempora, voluptatibus voluptatum?</p>
               </div>
               <div class="bg-contrast shadow-lg rounded">
                  <div class="browser">
                     <div class="screen">
                        <!--
                        <img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/screens/dash/1.png" class="img-responsive rounded-bottom" alt="">
                        !-->
                        <!-- 1296 743 !-->
                        <img src="https://softlab.mx/img/header.png" class="img-responsive rounded-bottom" alt="" style="width:100%;">
                        
                     </div>
                     
                     <div class="bubbles-speech d-none d-md-block"><span class="absolute small shadow speech-bubble" style="top: 47%; left: 1%;" data-aos="slide-up">Módulos Adaptados</span> <span class="absolute small shadow speech-bubble" style="top: 69%; left: 61%;" data-aos="slide-up">Reportes y KPI's</span> <span class="absolute small shadow speech-bubble" style="top: 15%; left: 85%;" data-aos="slide-up">Información al Instante</span> <span class="absolute small shadow speech-bubble" style="top: 7%; left: 30%;" data-aos="slide-up">Facilidad de Uso</span></div>
                     
                  </div>
               </div>
            </div>
         </section>
         <!-- ./Successful Implementations -->
         <!--
         <section class="section image-background contain" style="background-image: url(<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/shps/map-dots.svg);">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-5 me-md-auto">
                     <span class="badge bg-contrast text-primary rounded-pill shadow-sm py-2 px-4">Customer trust us</span>
                     <p class="display-3 display-md-1 light m-0 text-dark"><span class="counter extra-bold">123</span>K</p>
                     <p class="m-0 font-md text-dark"><span class="bold">Happy</span> Customers</p>
                     <hr class="my-4 w-25">
                     <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque aut earum esse et exercitationem fuga</p>
                  </div>
                  <div class="col-md-6">
                     <i data-feather="thumbs-up" width="48" height="48" class="stroke-primary"></i>
                     <div class="section-heading">
                        <h2 class="bold">Building trust around the world</h2>
                        <p class="lead text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at commodi cum dignissimos ducimus hic nemo quia ut velit.</p>
                     </div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dignissimos dolorem libero officiis quo repellendus voluptatibus! A assumenda eius excepturi labore minima nesciunt quod ratione, reiciendis repellat sapiente veritatis vero!</p>
                     <a href="javascript:;" class="btn btn-rounded btn-primary mt-4 learn-more">Learn more <i class="fa fa-long-arrow-alt-right icon"></i></a>
                  </div>
               </div>
            </div>
         </section>
         !-->
         <!-- ./Counters -->
         <!--
         <section class="">
            <div class="container">
               <div class="row align-items-center text-center text-lg-left">
                  <div class="col-12 col-md-7 col-lg-6 ms-lg-auto text-center text-md-start">
                     <i data-feather="activity" width="36" height="36" class="stroke-primary"></i>
                     <p class="small text-primary bold">Amazing stats</p>
                     <h2 class="bold">Get the very best of us by doing the best of you</h2>
                     <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolores dolorum, error est excepturi exercitationem hic iusto minus nam officia optio quasi tempore voluptatibus. Aut dolore in nostrum quae voluptatem!</p>
                  </div>
                  <div class="col-12 col-md-5 col-lg-5">
                     <div class="row g-3">
                        <div class="col-6">
                           <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-contrast">
                              <i data-feather="user" width="36" height="36" class="me-4 stroke-secondary"></i>
                              <div class="text-start">
                                 <p class="counter font-md bold m-0 text-dark">954</p>
                                 <p class="m-0">Users</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-contrast">
                              <i data-feather="download-cloud" width="36" height="36" class="me-4 stroke-secondary"></i>
                              <div class="text-start">
                                 <p class="counter font-md bold m-0 text-dark">37</p>
                                 <p class="m-0">Downloads</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-contrast">
                              <i data-feather="box" width="36" height="36" class="me-4 stroke-secondary"></i>
                              <div class="text-start">
                                 <p class="counter font-md bold m-0 text-dark">19</p>
                                 <p class="m-0">Plugins</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="rounded border shadow-box shadow-hover p-2 p-sm-3 d-flex align-items-center flex-wrap bg-primary text-contrast">
                              <i data-feather="star" width="36" height="36" class="me-4 stroke-contrast"></i>
                              <div class="text-start">
                                 <p class="counter font-md bold m-0">31</p>
                                 <p class="m-0">Projects</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         !-->
         <!-- ./Brands -->
         <!--
         <section class="section bg-light">
            <div class="container">
               <h4 class="bold text-center mb-5">Part of our happy customers</h4>
               <div class="row gap-y">
                  <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/logos/1.png" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;"></div>
                  <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/logos/2.png" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;"></div>
                  <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/logos/3.png" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;"></div>
                  <div class="col-md-3 col-xs-4 col-6 px-md-5"><img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/logos/4.png" alt="" class="img-responsive mx-auto op-7" style="max-height: 60px;"></div>
               </div>
            </div>
         </section>
         !-->
         <!-- ./Testimonials -->
         <!--
         <section class="section bg-light">
            <div class="container bring-to-front py-0">
               <div class="shadow bg-contrast p-5 rounded">
                  <div class="testimonials-slider swiper-center-nav">
                     <div class="swiper-container pb-5">
                        <div class="swiper-wrapper text-center w-50">
                           <div class="swiper-slide">
                              <div class="d-flex flex-column align-items-center">
                                 <img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/avatar/1.jpg" alt="" class="rounded-circle shadow mb-4">
                                 <p class="w-75 lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores consequatur cum distinctio, dolorem earum error esse ex fugiat inventore maiores minima, non placeat praesentium quam quas ut, vero voluptatem.</p>
                                 <hr class="w-50">
                                 <footer><cite class="bold text-primary text-capitalize">— Jane Doe,</cite> <span class="small text-secondary mt-0">Awesome Company</span></footer>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="d-flex flex-column align-items-center">
                                 <img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/avatar/2.jpg" alt="" class="rounded-circle shadow mb-4">
                                 <p class="w-75 lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores consequatur cum distinctio, dolorem earum error esse ex fugiat inventore maiores minima, non placeat praesentium quam quas ut, vero voluptatem.</p>
                                 <hr class="w-50">
                                 <footer><cite class="bold text-primary text-capitalize">— Jane Doe,</cite> <span class="small text-secondary mt-0">Awesome Company</span></footer>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="d-flex flex-column align-items-center">
                                 <img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/avatar/3.jpg" alt="" class="rounded-circle shadow mb-4">
                                 <p class="w-75 lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores consequatur cum distinctio, dolorem earum error esse ex fugiat inventore maiores minima, non placeat praesentium quam quas ut, vero voluptatem.</p>
                                 <hr class="w-50">
                                 <footer><cite class="bold text-primary text-capitalize">— Jane Doe,</cite> <span class="small text-secondary mt-0">Awesome Company</span></footer>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="d-flex flex-column align-items-center">
                                 <img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/avatar/4.jpg" alt="" class="rounded-circle shadow mb-4">
                                 <p class="w-75 lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores consequatur cum distinctio, dolorem earum error esse ex fugiat inventore maiores minima, non placeat praesentium quam quas ut, vero voluptatem.</p>
                                 <hr class="w-50">
                                 <footer><cite class="bold text-primary text-capitalize">— Jane Doe,</cite> <span class="small text-secondary mt-0">Awesome Company</span></footer>
                              </div>
                           </div>
                        </div>
                        
                        <div class="swiper-pagination"></div>
                     </div>
                     
                     <div class="swiper-button swiper-button-prev nav-testimonial-prev rounded-circle shadow"><i data-feather="arrow-left"></i></div>
                     
                     <div class="swiper-button swiper-button-next nav-testimonial-next rounded-circle shadow"><i data-feather="arrow-right"></i></div>
                  </div>
               </div>
            </div>
         </section>
         !-->
         <!-- ./CTA - Create Account -->
         <!--
         <section class="section bg-contrast edge top-left">
            <div class="container pt-5">
               <div class="d-flex align-items-center flex-column flex-md-row">
                  <div class="text-center text-md-start">
                     <p class="light mb-0 text-primary lead">Ready to get started?</p>
                     <h2 class="mt-0 bold">Create an account now</h2>
                  </div>
                  <a href="register.html" class="btn btn-primary btn-rounded mt-3 mt-md-0 ms-md-auto">Create DashCore account</a>
               </div>
            </div>
         </section>
         !-->
         <!-- ./Footer - Four Columns -->
         <footer class="site-footer section" style="background: #273140;">
            <div class="container pb-3 b-t">
               <div class="row gap-y text-center text-md-start">
                  
                  <div class="col-md-4 me-auto">
                     <img src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/img/logo.png" alt="" class="logo">
                     <p>El <b>Software</b> que su Empresa <b>Necesita</b></p>
                  </div>
                  <!--
                  <div class="col-md-2">
                     <h6 class="py-2 bold text-uppercase">Company</h6>
                     <nav class="nav flex-column"><a class="nav-item py-2" href="about.html">About</a> <a class="nav-item py-2" href="automate-social.html#">Services</a> <a class="nav-item py-2" href="blog/blog-grid.html">Blog</a></nav>
                  </div>
                  <div class="col-md-2">
                     <h6 class="py-2 bold text-uppercase">Product</h6>
                     <nav class="nav flex-column"><a class="nav-item py-2" href="automate-social.html#">Features</a> <a class="nav-item py-2" href="automate-social.html#">API</a> <a class="nav-item py-2" href="automate-social.html#">Customers</a></nav>
                  </div>
                  <div class="col-md-2">
                     <h6 class="py-2 bold text-uppercase">Channels</h6>
                     <nav class="nav flex-column"><a class="nav-item py-2" href="automate-social.html#">Careers</a> <a class="nav-item py-2" href="automate-social.html#">Contact</a> <a class="nav-item py-2" href="automate-social.html#">Search</a></nav>
                  </div>
               </div>
               <hr class="mt-5">
               !-->
               <div class="row small align-items-center">
                  <div class="col-md-4">
                     <p class="mt-2 mb-md-0 text-secondary text-center text-md-start">© <?php echo date('Y'); ?> SoftLab. Todos los derechos reservados.</p>
                  </div>
                  <div class="col-md-8">
                     <nav class="nav justify-content-center justify-content-md-end">
                        <a href="https://www.facebook.com/softlabmx/" target="_blank" class="btn btn-circle btn-sm btn-secondary me-3 op-4"><i class="fab fa-facebook"></i></a> 
                        <a href="https://wa.me/5213141609398/" target="_blank" class="btn btn-circle btn-sm btn-secondary me-3 op-4"><i class="fab fa-whatsapp"></i></a> 
                        <!--
                        <a href="automate-social.html#" target="_blank" class="btn btn-circle btn-sm btn-secondary me-3 op-4"><i class="fab fa-twitter"></i></a> 
                        <a href="automate-social.html#" target="_blank" class="btn btn-circle btn-sm btn-secondary op-4"><i class="fab fa-instagram"></i></a>
                        !-->
                     </nav>
                  </div>
               </div>
            </div>
         </footer>
      </main>
      <!-- themeforest:js -->
      <script src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/js/core.min.js"></script>
      <script src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/js/lib.min.js"></script>
      <script src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/js/dashcore.min.js"></script>
      <script src="<?php echo SYS_URL; ?><?php echo $this->sysProject; ?>/<?php echo $this->sysModule; ?>/view/js/<?php echo VERSION; ?>/<?php echo $this->sysModule; ?>.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function () {
            $('#example').DataTable();
         });
      </script>
      <!-- endinject -->
   </body>
</html>