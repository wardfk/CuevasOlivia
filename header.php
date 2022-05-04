

<?php 

// BEGIN PHP IMAGEN BANNER
// $imagenBanner = $_GET['imagenBanner'] : $_GET['imagenBanner'] ? '' ;
if(isset($_GET['imagenBanner'])) {
  $imagenBanner = $_GET['imagenBanner'];

} else {
  header("Loaction: index.php");
}
// END PHP IMAGEN BANNER

// BEGIN PHP BUTTON RESERVAR SMALL(NO EN PÁGINA RESERVAR)
if(isset($_GET['mostrar'])) {
  $mostrar = $_GET['mostrar'];

} else {
  $mostrar = "si";
}
// BEGIN PHP BUTTON RESERVAR SMALL(NO EN PÁGINA RESERVAR)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>

<header id="header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-md col-12 ms-auto">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo2.png" alt="Logo Cuevas de Olivia" class="logo" width="64px" height="48px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto align-items-baseline">
                            <a class="nav-link" href="index.php?imagenBanner=banner-photo.jpg">Inicio</a>
                            <a class="nav-link" href="cuevas.php?imagenBanner=pino.jpeg">Las Cuevas</a>
                            <a class="nav-link" href="quever.php">¿Qué ver?</a>
                            <a class="nav-link" href="contact.php">Contacto</a>
                            <a class="nav-link" href="reservation.php?mostrar=no">Reservar</a>
                            <button class="button-login">
                                <i class="bi bi-person"></i>
                            </button>
                            <select name="language" id="language">
                                <div class="option">
                                    <option value="esp">Español</option>
                                    <option value="eng">English</option>
                                    <option value="nl">Nederlands</option>
                                    <option value="fr">Français</option>
                                </div>
                            </select>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section id="banner">
       <img src="assets/img/<?php echo $imagenBanner;?>" alt="">  
    </section>

    <section id="reservar" class="container-fluid d-none d-md-block d-flex justify-content-around w-lg-75">
      <div class="row reservar-container d-flex justify-content-center">
              <div class="col-5 col-lg-4 d-flex justify-content-between first-part">
                  <div class="d-none d-xl-block col-8  text-reservar">
                      <h4>Reserva ahora <br><span>al mejor precio</span></h4>
                  </div>
                  <div class="col-4 ocupation flex-column m-auto">
                    <div class="text-ocupation">
                      <p>Ocupation</p>
                    </div>
                    <form action="">
                      <div class="select">
                        <select name="adults" id="select-adults" class="select-people">
                          <option value="0">Adultos</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                        <select name="kids" id="select-kids" class="select-people ">
                          <option value="0">Niños</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                        </select>
                      </div>
                    </form>
                </div>
              </div>
                <div class="col-7 col-lg-8 d-flex second-part">
                  <div class="dates col-8 col d-flex flex-column flex-lg-row m-auto">
                      <div class="container-entrada">
                          <label for="">Entrada</label>
                          <input class="data-entrada" type="date" name="entrada" placeholder="Llegada">
                      </div>
                      <div class="container-salida">
                          <label for="">Salida</label>
                          <input class="data-salida" type="date" name="salida">
                      </div>
                  </div>
                <div class="col-3 d-flex container-reservar">
                        <input type="submit" value="Reservar" name="Reservar" id="reservar-banner" placeholder="Reservar">
                </div>
              </div>
      </div>
    </section>

      <?php 
      if($mostrar == "si") {   ?>
        <section id="a-reservation" class="d-md-none">
        <a href="reservation.php">Reservar</a>
    </section>
     
  <?php  }  ?>

  <!-- ---------- END LOGIN MODAL ---------- -->
  <section id="login-modal" class="container-fluid">
      <div class="row container-modal">
        <div class="text-modal">
          <h4>Login</h4>
          <p><i class="bi bi-x close-modal"></i></p>
        </div>
          <div class="col input-login-modal mx-auto">
              <input type="text" name="email" placeholder="Correo" required>
              <input type="text" name="res-number" placeholder="Número Reserva" required>
              <input type="submit" id="submit-login" name="login" placeholder="Entrar">
          </div>
          <div>
              <p class="p-0">Puedes encontrar tu número de reserva en tu correo</p>
          </div>
      </div>
  </section>
<!-- ---------- END LOGIN MODAL ---------- -->
</header>  
<!-- ---------- END HEADER ---------- -->