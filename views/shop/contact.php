<?php
// Incluimos el header del dashboard.
include_once 'header.php';
?>
<main>
    <article>
        <!-- 
        - #CATEGORIAS
      -->
        <br><br><br>
        <section class="section service" aria-labelledby="service-label" id="contact">

            <div class="container">

                <p class="section-subtitle" id="service-label">CONTACTA CON NOSOTROS</p>

                <div class="signupFrm">
                    <form action="ejer_form1.php" class="form">
                        <!-- <h1 class="title">Registro</h1> -->
                        <h2>CONTACTAR</h2>
                        <div class="inputContainer">
                            <input type="text" class="input" placeholder="a">
                            <label for="" class="label" name="nombre" id="nombre">Nombre</label>
                        </div>

                        <div class="inputContainer">
                            <input type="email" class="input" placeholder="a">
                            <label for="" class="label">Correo</label>
                        </div>

                        <div class="textareaContainer">
                            <!-- <input type="text" class="input" placeholder="a"> -->
                            <textarea class="textarea" cols="30" rows="10" name="mensaje" id="mensaje"></textarea>
                            <label for="" class="label" name="mensaje" id="mensaje">Mensaje</label>
                        </div>


                        <div class="divBotones">
                            <input type="submit" class="submitBtn" value="Enviar">
                            <input type="reset" class="submitBtn" value="Cancelar"
                                onclick="window.modalRegistro.close();">
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29786.79819411872!2d-0.552779628052279!3d38.30379795529961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd624a1af9e54761%3A0x7dbaffa4a5e379ee!2sEscuela%20de%20Formaci%C3%B3n%20Profesional%20-%20FP%20FEMPA!5e0!3m2!1ses!2ses!4v1682438601089!5m2!1ses!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </article>
</main>
<?php
// Incluimos el footer del dashboard.
include_once 'footer.php';
?>