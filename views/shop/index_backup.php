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
          <form action="ejer_form1.php" class="form">
            <!-- <h1 class="title">Registro</h1> -->
            <h2>LOGIN</h2>
            <!-- <div class="inputContainer">
              <input type="text" class="input" placeholder="a">
              <label for="" class="label" name="nombre" id="nombre">Nombre</label>
            </div> -->

            <div class="inputContainer">
              <input type="email" class="input" placeholder="a">
              <label for="" class="label">Correo</label>
            </div>

            <div class="inputContainer">
              <input type="password" class="input" placeholder="a">
              <label for="" class="label">Contraseña</label>
            </div>

            <!-- <div class="inputContainer">
              <input type="password" class="input" placeholder="a">
              <label for="" class="label">Repita Password</label>
            </div> -->



            <!-- <div class="divInputCheckbox">
              <input type="checkbox" name="frutaFavorita2[]" value="on">Acepto las condiciones.</input>
            </div> -->

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


  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <!-- <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('./images/hero-bg.jpg')"> -->
      <section class="section hero has-bg-image" aria-label="home"
        style="background-color: var(--violet-blue-crayola);">

        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Realizamos todos los tramites por ti.</h1>

            <p class="hero-text">
              Nos dedicamos a ofrecer nuestra ayuda y conocimientos a las personas para la realización de tramites con
              entidades públicas.
            </p>

            <div class="btn-wrapper">

              <a href="#" class="btn btn-primary" onclick="window.modalRegistro.showModal();">Registrarse</a>

              <!-------------------------------INICIO DIALOG MODAL REGISTRO---------------------------------------->

              <!-- <button onclick="window.modalLogin.showModal();">Abrir ventana modal</button> -->
              <dialog id="modalRegistro">

                <div class="signupFrm">
                  <form action="ejer_form1.php" class="form">
                    <!-- <h1 class="title">Registro</h1> -->
                    <h2>REGISTRO</h2>
                    <div class="inputContainer">
                      <input type="text" class="input" placeholder="a">
                      <label for="" class="label" name="nombre" id="nombre">Nombre</label>
                    </div>

                    <div class="inputContainer">
                      <input type="email" class="input" placeholder="a">
                      <label for="" class="label">Correo</label>
                    </div>

                    <div class="inputContainer">
                      <input type="password" class="input" placeholder="a">
                      <label for="" class="label">Contraseña</label>
                    </div>

                    <div class="inputContainer">
                      <input type="password" class="input" placeholder="a">
                      <label for="" class="label">Repita Password</label>
                    </div>



                    <div class="divInputCheckbox">
                      <input type="checkbox" name="condiciones" value="on" class="checkboxAceptarCondiciones">Acepto las
                      condiciones.</input>
                    </div>

                    <div class="divBotones">
                      <input type="submit" class="submitBtn" value="Registrar">
                      <input type="reset" class="submitBtn" value="Cancelar" onclick="window.modalRegistro.close();">
                    </div>
                  </form>
                </div>



                <!-- <button onclick="window.modalLogin.close();">Cerrar</button> -->
                <!-- <div class="btn-divModalLogin">
          <a href="#" class="btn btn-primary" onclick="window.modalLogin.close();">Aceptar</a>
          <a href="#" class="btn btn-primary" onclick="window.modalLogin.close();">Cancelar</a>
        </div> -->
              </dialog>
              <!--------------------------------FIN DIALOG MODAL REGISTRO--------------------------------------->

              <a href="#" class="btn btn-outline" onclick="window.modalLogin.showModal();">Contactar</a>

            </div>

          </div>

          <div class="hero-slider" data-slider>

            <div class="slider-inner">
              <ul class="slider-container" data-slider-container>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <!-- <img src="./images/hero-slide-1.jpg" width="575" height="550" alt="" class="img-cover">-->
                    <video controls width=100% height=100%>
                      <source controls src="<?= TEMPLATE_IMAGES ?>video.mp4" type="video/mp4" />
                      <!-- <source src="cómo insertar videos con html.webm" type="video/webm" />
                      <source src="cómo insertar videos con html.ogv" type="video/ogg" /> -->
                      <!-- <img src="./images/hero-slide-1.jpg" alt="Video no soportado" /> -->
                      Su navegador no soporta este formato de video.
                    </video>
                  </figure>

                </li>

                <li class="slider-item">

                  <div class="hero-card">
                    <figure class="img-holder" style="--width: 575; --height: 550;">
                      <img src="<?= TEMPLATE_IMAGES ?>hero-slide-2.jpg" width="575" height="550" alt="hero banner"
                        class="img-cover">
                    </figure>

                    <button class="play-btn" aria-label="play adex intro">
                      <!-- <ion-icon name="play" aria-hidden="true"></ion-icon> -->
                      PLAY
                    </button>
                  </div>

                </li>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="<?= TEMPLATE_IMAGES ?>hero-slide-3.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

              </ul>
            </div>

            <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
              <!-- <ion-icon name="arrow-back"></ion-icon> -->
              < </button>

                <button class="slider-btn next" aria-label="slide to next" data-slider-next>
                  <!-- <ion-icon name="arrow-forward"></ion-icon> -->
                  >
                </button>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" aria-labelledby="service-label" id="queOfrecemos">

        <div class="container">

          <p class="section-subtitle" id="service-label">¿Qué ofrecemos?</p>

          <h2 class="h2 section-title">
            El servicio que ofrecemos está diseñado específicamente para satisfacer sus necesidades.
          </h2>

          <ul class="grid-list">

            <li id="liCardUno">
              <div class="service-card">

                <!-- <div class="card-icon">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div> -->

                <!-- <h3 class="h4 card-title">INGRESO MÍNIMO VITAL</h3> -->
                <br><br><br><br><br>
                <p class="card-text style-card1">
                  Ofrecemos aseroramiento en todos los pasos que el cliente tiene que dar para lograr los tramites que
                  necesita.
                </p>

                <!-- <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a> -->

              </div>
            </li>

            <li id="liCardDos">
              <div class=" service-card">

                <!-- <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
                </div> -->
                <br><br><br>
                <h3 class="h4 card-title">AYUDAS ALQUILER</h3>

                <p class="card-text style-card1">
                  Ofrecemos aseroramiento en todos los pasos que el cliente tiene que dar para lograr los tramites que
                  necesita.
                </p>

                <!-- <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a> -->

              </div>
            </li>

            <li id="liCardTres">
              <div class="service-card">

                <!-- <div class="card-icon">
                  <ion-icon name="cloud-download-outline" aria-hidden="true"></ion-icon>
                </div> -->
                <br><br><br>
                <h3 class="h4 card-title">AYUDA EXTREMA URGENCIA</h3>

                <p class="card-text style-card1">
                  Ofrecemos aseroramiento en todos los pasos que el cliente tiene que dar para lograr los tramites que
                  necesita.
                </p>

                <!-- <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a> -->

              </div>
            </li>

            <li>
              <div class="service-card">

                <!-- <div class="card-icon">
                  <ion-icon name="pie-chart-outline" aria-hidden="true"></ion-icon>
                </div> -->

                <h3 class="h4 card-title">AYUDAS ELECTRICIDAD Y AGUA</h3>

                <p class="card-text style-card1">
                  Ofrecemos aseroramiento en todos los pasos que el cliente tiene que dar para lograr los tramites que
                  necesita.
                </p>

                <!-- <a href="#" class="btn-text">
                  <span class="span">Learn More</span>

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                </a> -->

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" aria-labelledby="about-label" id="porqueElegirnos">
        <div class="container">

          <figure class="about-banner">
            <img src="<?= TEMPLATE_IMAGES ?>about-banner.png" width="800" height="580" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle" id="about-label">¿Por qué elegirnos?</p>

            <h2 class="h2 section-title">
              Encontraremos la forma de lograr lo que necesitas desde el primer día.
            </h2>

            <ul>

              <li class="about-item">
                <div class="accordion-card expanded" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <span class="span h5">Asesoría personalizada</span>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    Cada problema es único como las personas. Las circunstancias personales de cada persona son
                    distintas y nosotros lo sabemos.
                  </p>

                </div>
              </li>

              <li class="about-item">
                <div class="accordion-card" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <span class="span h5">Compromiso con el cliente</span>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    Nuestra nuestra empatía nos hace estar comprometido con los problemas del nuestro cliente, hace que
                    nos esforcemos al máximo para lograr solucionar sus problemas.
                  </p>

                </div>
              </li>

              <li class="about-item">
                <div class="accordion-card" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <span class="span h5">Damos soluciones</span>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    Profesionales en dar soluciones a los problemas de la gente.
                  </p>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" aria-labelledby="feature-label">
        <div class="container">

          <figure class="feature-banner">
            <img src="<?= TEMPLATE_IMAGES ?>feature-banner.png" width="800" height="531" loading="lazy"
              alt="feature banner" class="w-100">
          </figure>

          <div class="feature-content">

            <p class="section-subtitle" id="feautre-label">Our Solutions</p>

            <h2 class="h2 section-title">
              No se que poner
            </h2>

            <p class="section-text">
              xxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxx
            </p>

            <ul class="feature-list">

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    No se que poner
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    xxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxx
                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    xxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxx

                  </span>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon">
                    <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                  </div>

                  <span class="span">
                    xxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxx

                  </span>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>


      <!-- 
        - #STATS
      -->

      <section class="stats" aria-label="our stats">
        <div class="container">

          <ul class="stats-card has-bg-image" style="background-image: url('<?= TEMPLATE_IMAGES ?>stats-bg.jpg')">

            <li>
              <p class="card-text">
                <span class="h1">142</span>

                <spna class="span">Personas ayudadas</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">31</span>

                <spna class="span">Empresas</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">638</span>

                <spna class="span">Trámites realizados</spna>
              </p>
            </li>

            <li>
              <p class="card-text">
                <span class="h1">100%</span>

                <spna class="span">Familias felices</spna>
              </p>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PROJECT
      -->

      <section class="section project" aria-labelledby="project-label">
        <div class="container">

          <p class="section-subtitle" id="project-label">Casos de éxito</p>

          <h2 class="h2 section-title">
            Testimonios de personas que usaron nuestros servicios.
          </h2>

          <ul class="grid-list">

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="<?= TEMPLATE_IMAGES ?>blog-1.jpg" width="560" height="350" loading="lazy"
                    alt="Ligula tristique quis risus" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">PEPITA DE LOS PALOTES</a>
                  </h3>

                  <p class="card-text">
                    <i>"Estaba en un momento económico malo."</i>
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-04-14">12 Apr 2023</time>
                    </li>

                    <!-- <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Coding</span>
                    </li> -->

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="<?= TEMPLATE_IMAGES ?>blog-2.jpg" width="560" height="350" loading="lazy"
                    alt="Nullam id dolor elit id nibh" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">PEPITA DE LOS PALOTES</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit accusamus ad impedit adipisci rem
                    eaque aliquid mollitia porro soluta qui.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-03-29">29 Mar 2022</time>
                    </li>

                    <!-- <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Workspace</span>
                    </li> -->

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                  <img src="<?= TEMPLATE_IMAGES ?>blog-3.jpg" width="560" height="350" loading="lazy"
                    alt="Ultricies fusce porta elit" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">PEPITA DE LOS PALOTES</a>
                  </h3>

                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ullam aliquam quis a voluptates
                    officia consequatur doloribus blanditiis minus nihil?
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <time class="meta-text" datetime="2022-02-26">26 Feb 2022</time>
                    </li>

                    <!-- <li class="card-meta-item">
                      <ion-icon name="document-text-outline" aria-hidden="true"></ion-icon>

                      <span class="meta-text">Meeting</span>
                    </li> -->

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" aria-label="call to action">
        <div class="container">

          <h2 class="h2 section-title">
            Ingresa y usa nuestros servicios
          </h2>

          <a href="#" class="btn btn-primary">Login</a>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container grid-list">

      <div class="footer-brand">

        <!-- <a href="#" class="logo">
          <img src="./assets/images/logo-light.svg" width="74" height="24" alt="Adex home">
        </a> -->
        TODO-TRAMITES
        <p class="footer-text">
          &copy; 2022 Ruben Martinez Cortes. <br> All rights reserved.
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
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

      </div>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title">Donde estamos</p>
        </li>

        <li>
          <address class="footer-text">
            Alicante, España
          </address>
        </li>

        <li>
          <a href="mailto:info@email.com" class="footer-link">info@email.com</a>
        </li>

        <li>
          <a href="tel:001234567890" class="footer-link">654342312</a>
        </li>

      </ul>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title">Informacion</p>
        </li>

        <li>
          <a href="#" class="footer-link">Sobre nosotros</a>
        </li>

        <li>
          <a href="#" class="footer-link">Nuestra historia</a>
        </li>

        <li>
          <a href="#" class="footer-link">Proyectos</a>
        </li>

        <li>
          <a href="#" class="footer-link">Terminos de uso</a>
        </li>

        <li>
          <a href="#" class="footer-link">Politica de privacidad</a>
        </li>

      </ul>

      <div class="footer-list">

        <p class="h4 footer-list-title">Suscribete</p>

        <p class="footer-text">
          Te enviaremos informacion sobre las novedades
        </p>

        <form action="" class="input-wrapper">
          <input type="email" name="email_address" placeholder="Email" required class="input-field">

          <button type="submit" class="submit-btn">Enviar</button>
        </form>

      </div>

    </div>
  </footer>





  <!-- 
    - custom js link
  -->
  <script src="<?= TEMPLATE_JS ?>script.js"></script>

  <!-- 
    - ionicon
  -->
  <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->

</body>

</html>