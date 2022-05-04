<?php include_once("header.php") ?>

<main id="contact">
    <div class="container-fluid">
        <div class="row contact-left">
            <div class="col">
                <h2>Contacto</h2>
                <img src="" alt="">
                <p>¡No dudes en contactarnos!</p>
                <br>
                <p>Si quieres reselver cualquier duda sobre nuestros alojamientos o nuestras ubicaciones, ¡contacta con nosotros!</p>
            </div>
            <form class="form" action="https://formsubmit.co/bc36d1f46f11dc16ee0c212a797e9e4f" method="post">
                <!-- Honeypot -->
                <input type="text" name="_honey" style="display: none;">

                <!-- disable captcha -->
                <input type="hidden" name="_captcha" value="false">

                <input type="hidden" name="_next" value="http://localhost/proyectoMaquetacion/succes.php">

                <div class="col-md-6 contact-name">
                    <input type="text" name="name" id="name" value="" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 contact-email">
                    <input type="email" name="email" id="email" value="" placeholder="Correo" required>
                </div>
                <div class="col-md-6 contact-message">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                </div>
                <div class="col-md-6 contact-submit">
                    <input type="submit" value="Enviar">
                </div>
            </form>

        </div>
















        <div class="contact-right">
            
        </div>
    </div>
</main>

<!-- ---------- BEGIN GO TO TOP ---------- -->   
<button onclick="goToTop()" class="go-to-top" title="Go to top" class="d-none d-md-block">Top</button>
<!-- ---------- END GO TO TOP ---------- -->   


<?php include_once("footer.php") ?>