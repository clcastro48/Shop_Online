 <div id="cart">
         <img src="img/usuario.png">
        <img src="img/carrito.png">
           <?php
             if (isset($_SESSION["cantidadTotal"]))
                 {
             ?>
                <p><?php echo $_SESSION["cantidadTotal"]; ?></p>
             <?php
                }else{
             ?>
                <p>0</p>
          <?php } ?>
</div>