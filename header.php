<!doctype html>
<html class="no-js " <?php language_attributes();?>> 
<head>
    <!-- Basic -->
    <meta <?php bloginfo('charset');?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->

    <?php wp_head();?>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="wp-content/themes/Solenoide/images/favicon-16x16.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href=" ">

    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">


    

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>

<div>
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="wp-content/themes/Solenoide/images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="O que você procura?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> +55 (92) 4002-8922 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">info@projetosolenoide.com</a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div class="social">
                                <a class="facebook" href="https://www.facebook.com/projetoSolenoide/" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>       

                                <a class="instagram" style="background: #bb0e9e;" href="https://www.instagram.com/projeto.solenoide/" data-tooltip="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            </div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.php"><img src="wp-content/themes/Solenoide/images/logos.png" alt=""></a>
                        </div>
                    </div>
<!--
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Início</a></li>
                            <li><a href="wp-content/themes/Solenoide/quemsomos.php">Quem Somos?</a></li>
                            <li class="dropdown yamm-fw yamm-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle active">Olímpiadas <b class="fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content clearfix" style="width: 200%;">
                                            <div class="row-fluid">
                                                <div class="col-md-6 col-sm-6">
                                                    <h4>Nossos Preparatórios</h4>
                                                    <ul style="width: 250%;">
                                                        <li><a href="wp-content/themes/Solenoide/informatica.html">Informática - OBI</a></li>
                                                        <li><a href="wp-content/themes/Solenoide/matematica.html">Matemática - OBMEP</a></li>
                                                        <li><a href="wp-content/themes/Solenoide/quimica.html">Química - OBQ</a></li>
                                                        <li><a href="wp-content/themes/Solenoide/fisica.html">Física - OBF</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="wp-content/themes/Solenoide/voluntario.html">Seja Voluntário</a></li>
                            <li><a href="wp-content/themes/Solenoide/contacto.html">Contato</a></li>
                            <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a></li>
                            <li><a href="wp-content/themes/Solenoide/contacto.html" style="background: #FF4C27; border-radius: 10px;">Login</a></li>
                        </ul>
                    </div>
-->
                    <nav id="navbar" class="navbar-collapse collapse" role="navigation">
                        <div class="nav navbar-right">
                         <!-- Brand and toggle get grouped for better mobile display -->
                            
                            <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'principal',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>

                        </div>

                       
                    </nav>

                  

                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>
    </div>
</div>
