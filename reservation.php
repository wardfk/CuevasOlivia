<?php include_once("header.php") ?>

<main id="reservation">
   <div class="container-fluid">
       <div class="row">
            <div class="col-md-9">
                <div>
                    <h2>Reservar</h2>
                    <img src="" alt="">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="radio">
                            <label for="">
                                <input type="radio" id="cbpicon" value="picon">
                                Cueva del Picón
                            </label>
                            <label for="">
                                <input type="radio" id="cbcerro" value="cerro">
                                Cueva del Cerro
                            </label>
                        </div>
                        <div class="dates">
                            <div class="container-entrada">
                                <label for="">Entrada</label>
                                <input class="data-entrada" type="date" name="entrada" placeholder="Llegada" required>
                            </div>
                            <div class="container-salida">
                                <label for="">Salida</label>
                                <input class="data-salida" type="date" name="salida" required>
                            </div>
                        </div>
                        <div class="select">  
                            <select name="adults" id="select-adults" class="select-people" required>
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
                            <select name="kids" id="select-kids" class="select-people">
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
                    </div>
                    <div class="col-md-4">
                        <h4>Disponibilidad</h4>
                        <div class="calender">
                            fsadfklsdjf
                            fsdvnknlvksf
                            svanarlnvñlsi
                        </div>
                    </div>
                </div>
                <div class="borderreservar">
                    <div class="padborder">
                        <div class="pers-dates row d-flex flex-wrap justify-content-center align-items-center">
                            <input class="col-md-6" type="text" id="first-name" name="first-name" placeholder="Nombre" required>
                            <input class="col-md-6" type="text" id="last-name" name="last-name" placeholder="Apellidos" required>
                            <input class="col-md-6" type="email" id="email" name="email" placeholder="Correo electrónico" required>
                            <input class="col-md-6" type="text" id="conf-email" name="conf-email" placeholder="Confirmar Correo" required>
                            <input class="col-md-6" type="text" id="numb_identification" name="numb_identification" placeholder="Número de identificación" required>
                            <input class="col-md-6" type="text" id="tlf" name="tlf" placeholder="Teléfono" required>
                            <input class="col-md-6" type="text" id="country" name="country" placeholder="País" required>
                            <input class="col-md-6" type="text" id="postcode" name="postcode" placeholder="Código Postal" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-md-center reservation-dates">
                <h4>Detalles de reserva</h4>
                <div class="d-flex justify-content-between">
                    <p>Entrada</p>
                    <p>fecha entrada</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Salida</p>
                    <p>fecha salida</p>
                </div>
                <div class="d-flex">
                    <p>Cuantas</p><p>noches</p>
                </div>
                <div class="d-flex">
                    <p>Cuantos</p><p>Adultos</p>
                </div>
                <div class="d-flex">
                    <p>Cuantos</p><p>Bebés</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Cueva Picón/Cerro</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Total a pagar</p>
                    <p>€</p>
                </div>
                <button>
                    Pagar
                </button>
                <div class="terminos">
                    <label for="">
                        <input type="checkbox" required>
                        Acepto los términos y condiciones y el aviso de privacidad
                    </label>
                </div>
            </div>
       </div>
   </div> 
</main>

<!-- ---------- BEGIN GO TO TOP ---------- -->   
<button onclick="goToTop()" class="go-to-top" title="Go to top" class="d-none d-md-block">Top</button>
<!-- ---------- END GO TO TOP ---------- -->  

<?php include_once("footer.php") ?>