<?php
// Incluimos el header del dashboard.
include_once 'header.php';
?>
<main>
  <article>

    <!-- 
        - #banner superior
      -->

    <!-- <section class="section hero has-bg-image" aria-label="home"
        style="background-image: url('./images/hero-bg.jpg')"> -->
    <section class="section hero has-bg-image" id="banner_superior" aria-label="home"
      style="background-color: var(--violet-blue-crayola);">

      <div class="container">

        <div class="hero-content">

          <h1 class="h1 hero-title">ECOMMERCE</h1>

          <p class="hero-text">
            Somos el supermercado de todos y para todos los alicantinos.


            <?php
            // var_dump($user->getUser2());
            // $user = new User;
            // $user = $user->getUser2();
            // foreach ($user as $u) {
            //   echo "Nombre es " . $u['user_name'] . "<br>";
            // }
            
            // echo $user 
            // echo "<br>";
            // echo "<br>";
            // var_dump($user);
            // echo $user[]
            // echo "<br>";
            // echo "<br>";
            // foreach ($user as $u => $q) {
            //   echo "<br>";
            //   // echo $q;
            //   echo "<br>";
            //   var_dump($q);
            //   echo "<br>";
            //   echo $q["user_name"];
            //   $user->close();
            // }
            
            ?>
          </p>

          <div class="btn-wrapper">

            <a href="#" class="btn btn-primary" onclick="window.modalRegistro.showModal();">Registrarse</a>

            <!-------------------------------INICIO DIALOG MODAL REGISTRO---------------------------------------->

            <!-- <button onclick="window.modalLogin.showModal();">Abrir ventana modal</button> -->
            <dialog id="modalRegistro">

              <div class="signupFrm">
                <form action="index.php?controller=userController&action=insertUser" class="form" method="POST">
                  <!-- <h1 class="title">Registro</h1> -->
                  <h2>REGISTRO</h2>
                  <div class="inputContainer">
                    <input type="text" class="input" placeholder="a" name="user_name">
                    <label for="" class="label" name="nombre" id="nombre">Nombre</label>
                  </div>

                  <div class="inputContainer">
                    <input type="email" class="input" placeholder="a" name="user_email">
                    <label for="" class="label">Correo</label>
                  </div>

                  <div class="inputContainer">
                    <input type="password" class="input" placeholder="a" name="user_password1">
                    <label for="" class="label">Contraseña</label>
                  </div>

                  <div class="inputContainer">
                    <input type="password" class="input" placeholder="a" name="user_password2">
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

                <div class="hero-card">
                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="<?= TEMPLATE_IMAGES ?>bebidas.jpg" width="575" height="550" alt="hero banner"
                      class="img-cover">
                  </figure>
                </div>

              </li>

              <li class="slider-item">

                <div class="hero-card">
                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="<?= TEMPLATE_IMAGES ?>frutas.jpg" width="575" height="550" alt="hero banner"
                      class="img-cover">
                  </figure>
                </div>

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
        - #CATEGORIAS
      -->
    <?php
    $q = new indexController;
    $q->listCategoryView();

    ?>

    <!-- *********** BANNER INTERMEDIO *************-->
    <section class="stats" aria-label="our stats">
      <div class="container">

        <ul class="stats-card has-bg-image" style="background-image: url('<?= TEMPLATE_IMAGES ?>stats-bg.jpg')">

          <li>
            <p class="card-text">
              <span class="h1">748</span>

              <spna class="span">Trabajadores</spna>
            </p>
          </li>

          <li>
            <p class="card-text">
              <span class="h1">31</span>

              <spna class="span">Supermercados</spna>
            </p>
          </li>

          <li>
            <p class="card-text">
              <span class="h1">17</span>

              <spna class="span">Provincias</spna>
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
        - #OFERTAS
      -->

    <section class="section project" aria-labelledby="project-label" id="destacados">
      <div class="container">

        <p class="section-subtitle" id="project-label">OFERTAS</p>

        <!-- <h2 class="h2 section-title">
          Testimonios de personas que usaron nuestros servicios.
        </h2> -->

        <ul class="grid-list">

          <li>
            <div class="project-card">

              <figure class="card-banner img-holder" style="--width: 560; --height: 350;">
                <img src="<?= TEMPLATE_IMAGES ?>pro_kitkat.jpg" width="560" height="350" loading="lazy" alt="Kit Kat"
                  class="img-cover">
              </figure>

              <div class="card-content">

                <h3 class="h3">
                  <a href="#" class="card-title">KITKAT </a>
                </h3>

                <p class="card-text">
                  <i>"Comeme el kitkat."</i>
                </p>

                <ul class="card-meta-list">

                  <li class="card-meta-item">
                    <input type="submit" class="submitBtn" value="Comprar">
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
                <img src="<?= TEMPLATE_IMAGES ?>pro_nescafe.jpg" width="560" height="350" loading="lazy"
                  alt="Nullam id dolor elit id nibh" class="img-cover">
              </figure>

              <div class="card-content">

                <h3 class="h3">
                  <a href="#" class="card-title">NESCAFE</a>
                </h3>

                <p class="card-text">
                  El sabor africano de NESCAFE.
                </p>

                <ul class="card-meta-list">

                  <li class="card-meta-item">
                    <input type="submit" class="submitBtn" value="Comprar">
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
                <img src="<?= TEMPLATE_IMAGES ?>pro_palmolive.jpg" width="560" height="350" loading="lazy"
                  alt="Ultricies fusce porta elit" class="img-cover">
              </figure>

              <div class="card-content">

                <h3 class="h3">
                  <a href="#" class="card-title">PALMOLIVE</a>
                </h3>

                <p class="card-text">
                  El jabón para hombres, siempre la usan para tenerla limpias.
                </p>

                <ul class="card-meta-list">

                  <li class="card-meta-item">
                    <input type="submit" class="submitBtn" value="Comprar">
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
            Somos el supermercado para hombre con mayor crecimiento del país.
          </h2>

          <ul>

            <li class="about-item">
              <div class="accordion-card expanded" data-accordion>

                <h3 class="card-title">
                  <button class="accordion-btn" data-accordion-btn>
                    <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                    <span class="span h5">Productos nacionales</span>
                  </button>
                </h3>

                <p class="accordion-content">
                  Nuestros productos provienen deproveedores nacionales.
                </p>

              </div>
            </li>

            <li class="about-item">
              <div class="accordion-card" data-accordion>

                <h3 class="card-title">
                  <button class="accordion-btn" data-accordion-btn>
                    <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                    <span class="span h5">Compromiso con el Medio Ambiente</span>
                  </button>
                </h3>

                <p class="accordion-content">
                  Somos ccreyentes de la economia respetable con el medio ambiente y economía circular.
                </p>

              </div>
            </li>

            <li class="about-item">
              <div class="accordion-card" data-accordion>

                <h3 class="card-title">
                  <button class="accordion-btn" data-accordion-btn>
                    <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                    <span class="span h5">Los mejores precios.</span>
                  </button>
                </h3>

                <p class="accordion-content">
                  Queremos aportar a la sociedad nuestro granito de arena y ajustamos nuestros precios.
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

          <p class="section-subtitle" id="feautre-label">¿Quienes somos?</p>

          <h2 class="h2 section-title">
            Somos una empresa familiar qe creemos en proporcionar a los ciudadanos el mejor producto.
          </h2>

          <p class="section-text">
            Nuestra intencion es devolver a la sociedad la confianza que ponen en nosotros aportandoles los mejores
            productos y precios. Nuestro productos son ecologicos y de la mejor calidad. Nuestros fundamentos son los
            siguientes:
          </p>

          <ul class="feature-list">

            <li>
              <div class="feature-card">

                <div class="card-icon">
                  <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">
                  Buen precio.
                </span>

              </div>
            </li>

            <li>
              <div class="feature-card">

                <div class="card-icon">
                  <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">
                  Ecologicos.
                </span>

              </div>
            </li>

            <li>
              <div class="feature-card">

                <div class="card-icon">
                  <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">
                  Sano.

                </span>

              </div>
            </li>

            <li>
              <div class="feature-card">

                <div class="card-icon">
                  <ion-icon name="checkmark" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">
                  Social.
                </span>

              </div>
            </li>

          </ul>

        </div>

      </div>
    </section>


    <!-- 
        - #PRE-FOOTER
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
<?php
// Incluimos el footer del dashboard.
include_once 'footer.php';
?>