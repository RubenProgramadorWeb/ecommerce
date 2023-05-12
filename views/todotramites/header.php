<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Todo-Tramites</title>
  <meta name="title" content="TODO-TRAMITES">
  <meta name="description" content="Esto es una agencia que te ayuda a realizar tramites publicos">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
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

      <!-- <a href="#" class="logo">
        <img src="./images/logo-light.svg" width="74" height="24" alt="Adex home" class="logo-light">
    
        <img src="./images/logo-dark.svg" width="74" height="24" alt="Adex home" class="logo-dark">
        <span class="textoLogo">TODO-TRAMITES</span>
      </a> -->
      <!-- <span class="textoLogo t-stroke t-shadow-halftone2">TODO-TRAMITES</span> -->

      <div class="waviy">
        <span style="--i:1">T</span>
        <span style="--i:2">O</span>
        <span style="--i:3">D</span>
        <span style="--i:4">O</span>
        <span style="--i:5">-</span>
        <span style="--i:6">T</span>
        <span style="--i:7">R</span>
        <span style="--i:8">A</span>
        <span style="--i:9">M</span>
        <span style="--i:10">I</span>
        <span style="--i:11">T</span>
        <span style="--i:12">E</span>
        <span style="--i:13">S</span>

      </div>


      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <!-- <img src="./images/logo-light.svg" width="74" height="24" alt="Adex home"> -->
            TODO-TRAMITES
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <!-- <ion-icon name="close-outline" aria-hidden="true"></ion-icon> -->
            x
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">Inicio</a>
          </li>

          <li>
            <a href="#queOfrecemos" class="navbar-link">¿Qué ofrecemos?</a>
          </li>

          <li>
            <a href="#porqueElegirnos" class="navbar-link">¿Por qué elegirnos?</a>
          </li>

          <!-- <li>
            <a href="#" class="navbar-link">Projects</a>
          </li> -->

          <!-- <li>
            <a href="#" class="navbar-link">Noticias</a>
          </li> -->

          <li>
            <a href="#" class="navbar-link">Contactar</a>
          </li>

        </ul>

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">info@todo-tramites.net</a>

          <a href="tel:001234567890" class="contact-link">654 34 23 12</a>
        </div>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <a href="#" class="btn btn-primary" onclick="window.modalLogin.showModal();">Login</a>

      <!-------------------------------INICIO DIALOG MODAL LOGIN---------------------------------------->

      <!-- <button onclick="window.modalLogin.showModal();">Abrir ventana modal</button> -->
      <dialog id="modalLogin">
        <div class="signupFrm">
          <form action="login.php" class="form" method="POST">
            <!-- <h1 class="title">Registro</h1> -->
            <h2>LOGIN</h2>

            <div class="inputContainer">
              <input type="email" class="input" placeholder="a" name="login_email">
              <label for="" class="label">Correo</label>
            </div>

            <div class="inputContainer">
              <input type="password" class="input" placeholder="a" name="login_password">
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