<?php

 require_once("class/class.php");
 $obj=new Trabajo();
 $productos=$obj->getProductos();

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Online</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css"> 
  </head>
         <body>
            <div class="cabez" >
              <div id="header">
                <?php require_once("header.php") ?>
                <div id="logo">
                  <a class="brand" href="index.php">Shop Online</a>
                </div>
              </div>
            </div>
            <div id="principal">
              <div id="content">
              <section id="banner">
                  <img src="img/imagen3.jpg">
                  <div class="contenedor">
                      <h2>Lo que necesitas, para ti y tu familia lo puedes encontrar aqui.</h2>
                  </div>
              </section>
              <section id="info">
                  <h3>Lo que necesitas, para ti y tu familia lo puedes encontrar aqui.</h3>
                  <div class="contenedor">
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad27.jpg" alt=""><a>
                          <h4>Electrodomesticos</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad22.jpg" alt=""></a>
                          <h4>Moda</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad15.jpg" alt=""></a>
                          <h4>Tecnologia</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad17.jpg" alt=""></a>
                          <h4>Entretenimiento</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad11.jpg" alt=""></a>
                          <h4>Hogar</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad13.jpg" alt=""></a>
                          <h4>Relojeria</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad25.jpg" alt=""></a>
                          <h4>Fotografia</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad23.jpg" alt=""></a>
                          <h4>Joyeria</h4>
                      </div>
                      <div class="info-pet">
                          <a href="http://localhost/mi_carrito-master/game.php"><img src="img/publicidad29.jpg" alt=""></a>
                          <h4>VideoJuegos</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad6.jpg" alt=""></a>
                          <h4>Mascotas</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad10.jpg" alt=""></a>
                          <h4>Deporte</h4>
                      </div>
                      <div class="info-pet">
                          <a href="#"><img src="img/publicidad5.jpg" alt=""></a>
                          <h4>Playa</h4>
                      </div>



                  </div>
              </section>
              </div>
              <footer>
              <div class="contenedor">
                  <p class="copy">Politecnico &copy; 2020</p>
                  <div class="sociales">
                      <a class="fontawesome-facebook-sign" href="#"></a>
                      <a class="fontawesome-twitter" href="#"></a>
                      <a class="fontawesome-camera-retro" href="#"></a>
                      <a class="fontawesome-google-plus-sign" href="#"></a>
                  </div>
              </div>
          </footer>
            </div>
    </body>
</html>