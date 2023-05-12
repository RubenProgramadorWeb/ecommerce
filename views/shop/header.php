<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Ecommerce</title>
  <meta name="title" content="TODO-TRAMITES">
  <meta name="description" content="Esto es una agencia que te ayuda a realizar tramites publicos">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - FUENTES DE GOOGLE
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - STYLE CSS
  -->
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <link rel="stylesheet" href="<?= TEMPLATE_STYLE; ?>style.css">


  <!-- 
    - preload images
  -->
  <!-- <link rel="preload" as="image" href="./images/hero-bg.jpg"> -->
  <!-- <link rel="preload" as="image" href="./images/hero-slide-1.jpg"> -->
  <link rel="preload" as="image" href="<?= TEMPLATE_IMAGES ?>hero-slide-2.jpg">
  <link rel="preload" as="image" href="<?= TEMPLATE_IMAGES ?>hero-slide-3.jpg">

</head>

<body>
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">


      <div class="waviy">
        <a href="index.php" class="navbar-link">
          <span style="--i:1">E</span>
          <span style="--i:2">C</span>
          <span style="--i:3">O</span>
          <span style="--i:4">M</span>
          <span style="--i:5">M</span>
          <span style="--i:6">E</span>
          <span style="--i:7">R</span>
          <span style="--i:8">C</span>
          <span style="--i:9">E</span>
          <!-- <span style="--i:10">I</span>
        <span style="--i:11">T</span>
        <span style="--i:12">E</span>
        <span style="--i:13">S</span> -->
        </a>

      </div>


      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <!-- <img src="./images/logo-light.svg" width="74" height="24" alt="Adex home"> -->
            ECOMMERCE
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <!-- <ion-icon name="close-outline" aria-hidden="true"></ion-icon> -->
            x
          </button>
        </div>

        <ul class="navbar-list">

          <!-- <li>
            <a href="#" class="navbar-link">Inicio</a>
          </li> -->
          <li>
            <a href="index.php?p=category&cat=woman" class="navbar-link">Mujer</a>
          </li>
          <li>
            <a href="index.php?p=category&cat=men" class="navbar-link">Hombres</a>
          </li>
          <?php // if ($identificado) { ?>
          <li>
            <a href="index.php?p=category&cat=offer" class="navbar-link">Ofertas</a>
          </li>
          <?php //} ?>
          <li>
            <!-- <a href="index.php?p=contact" class="navbar-link">Contactar </a> -->
            <a href="index.php?controller=contactController&action=contact" class="navbar-link">Contactar </a>
          </li>
          <li>
            <!-- <a href="#categorias" class="navbar-link">Categorías</a> -->
            <a href="index.php?controller=categoryController&action=category" class="navbar-link">Categorías</a>
          </li>

          <!-- <li>
            <a href="#" class="navbar-link">Projects</a>
          </li> -->

          <!-- <li>
            <a href="#" class="navbar-link">Noticias</a>
          </li> -->



        </ul>

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">info@mercahome.com</a>

          <a href="tel:001234567890" class="contact-link">654 34 23 12</a>
        </div>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <!-- <ion-icon name="logo-twitter"></ion-icon> -->
              Iniciar Sesión
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <ion-icon name="logo-facebook"></ion-icon> -->
              Registrarse
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <ion-icon name="logo-dribbble"></ion-icon> -->
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <ion-icon name="logo-instagram"></ion-icon> -->
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <!-- <ion-icon name="logo-youtube"></ion-icon> -->
            </a>
          </li>

        </ul>

      </nav>

      <a href="#" class="btn btn-primary" onclick="window.modalCart.showModal();">
        <h3>&#128722;</h3>
      </a>

      <!-------------------------------INICIO DIALOG MODAL CARRITO---------------------------------------->

      <!-- <button onclick="window.modalLogin.showModal();">Abrir ventana modal</button> -->
      <dialog id="modalCart">
        <div class="signupFrm">
          <form class="form" method="POST">
            <!-- <h1 class="title">Registro</h1> -->
            <h2>CARRITO DE LA COMPRA</h2>

            LINEAS DEL CARRITO <br> <br>
            TOTALES DE LO ACUMULADO

            <div class="divBotones">
              <input type="submit" class="submitBtn" value="Pagar">
              <input type="reset" class="submitBtn" value="Cancelar" onclick="window.modalCart.close();">
            </div>
          </form>
        </div>
      </dialog>
      <!--------------------------------FIN DIALOG MODAL CARRITO--------------------------------------->


      <?php if (!isset($_SESSION['user_check'])) { ?>
      <!-- <a href="#" class="btn btn-primary" onclick="window.modalLogin.showModal();"> -->
        <a href="#" class="btn btn-primary" onclick="window.modalLogin.showModal();">
          <h3>Login

          </h3>
        </a>

      <?php } else { ?>
        <a href="index.php?controller=userController&action=destroySession" class="btn btn-primary">
          <h3>Salir</h3>
        </a>
        <?php


        if ($_SESSION["user_type"] == 1) {
          ?>
          <a href="./admin/index.php" target="_blank" class="btn btn-primary">
            <h3>Panel</h3>
          </a>
          <?php
        }
        ?>

      <?php } ?>
      <!-------------------------------INICIO DIALOG MODAL LOGIN---------------------------------------->

      <!-- <button onclick="window.modalLogin.showModal();">Abrir ventana modal</button> -->
      <dialog id="modalLogin">
        <div class="signupFrm">
          <form action="index.php?controller=userController&action=checkLogin" class="form" method="POST">
            <!-- <h1 class="title">Registro</h1> -->
            <h2>LOGIN</h2>

            <div class="inputContainer">
              <input type="email" class="input" placeholder="a" name="user_email">
              <label for="" class="label">Correo</label>
            </div>

            <div class="inputContainer">
              <input type="password" class="input" placeholder="a" name="user_password">
              <label for="" class="label">Contraseña</label>
            </div>

            <div class="divBotones">
              <input type="submit" class="submitBtn" value="Entrar">
              <input type="reset" class="submitBtn" value="Cancelar" onclick="window.modalLogin.close();">
            </div>
          </form>
        </div>



        <!-- <button onclick="window.modalLogin.close();">Cerrar</button> -->
        <!-- <div class="btn-divModalLogin">
          <a href="#" class="btn btn-primary" onclick="window.modalLogin.close();">Aceptar</a>
          <a href="#" class="btn btn-primary" onclick="window.modalLogin.close();">Cancelar</a>
        </div> -->
      </dialog>
      <!--------------------------------FIN DIALOG MODAL LOGIN--------------------------------------->

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <!-- <ion-icon name="menu-outline" aria-hidden="true">z</ion-icon> -->
        <strong> &#9776;</strong>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>


    </div>
  </header>