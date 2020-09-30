<?php

   require_once("class/class.php");

   $obj=new Trabajo();
   $id=strip_tags($_GET["id"]);
   $productos=$obj->getProductosPorId($id);

?>

<html>
   <head>
		<title>Shop Online</title>
       <link rel="stylesheet" type="text/css" href="css/estilos.css">
       <link rel="stylesheet" type="text/css" href="css/detalle.css">
       <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
       <script type="text/javascript" src="js/funciones.js"></script>
    </head>
         <body>
           <div class="cabez">
              <div id="header">
                <?php require_once("header.php") ?>
                 <div id="logo">
                    <a class="brand" href="index.php">Shop Online</a>
                 </div>
              </div>
           </div>
           <div id="principal">
           <!--********************menu****************************************-->
            <!--********************contenedor******************************** -->
              <div id="content">
                    <div id="contenedor">
                          <br>
                          <?php foreach ($productos as $pro):?>
                                <div id="foto_detalle">
                                   <img src="fotos/<?php echo $pro["name"]."big.jpg"; ?>">
                                </div>
                                <div id="detalles" style="font-family: 'Nahum'; color: white;">
                                    <p><?php echo $pro["producto"]; ?></p>
                                    <p><?php echo $pro["vig"]; ?></p>
                                    <p><?php echo $pro["precio"]; ?></p>
                                    <p><?php echo $pro["empresa"]; ?></p>
                                    <p><?php echo $pro["idioma"]; ?></p>
                                    <p><?php echo $pro["edad"]; ?></p>
                                    <button onclick="add2(<?php echo $pro['id'];?>,'add');" class="btn success">Comprar</button>
                                </div>
                                <div id="video">
                                    <a href="carrito.php?id=<?php echo $pro['id']; ?>&action=add" style="display:none;">Comprar</a>
                                    <p><?php echo $pro["video"]; ?></p>
                                </div>
                          <?php endforeach; ?>
                    </div>
              </div>
                 <!--********************contenedor****************************************-->

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