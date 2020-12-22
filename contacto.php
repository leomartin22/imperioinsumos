<?php 
include 'vistas/header.php';
include 'vistas/menunav.php';
?>
 <!-- reglas CSS para formulario !-->
   <style type="text/css">
.form-consulta {max-width: 100%; background: #eee; margin-left: 35% ;padding: 25px; font-family: 'Source Sans Pro', sans-serif;}
.campo-form {width:100%; eight:36px; margin:2px 0 6px; padding-left:6px; box-sizing: border-box; border-radius:3px; border:0; font-family: 'Source Sans Pro', sans-serif; font-size:1em;}
label span {color: #f00}
textarea {min-height: 150px!important;}
.btn-form {display: inline-block; border:0; background: #000; height: 46px; line-height: 46px; padding: 0 20px; border-radius: 6px; color:#fff; text-decoration: none; text-transform: uppercase; letter-spacing: 1px}
.btn-form:hover {background: #444;}
</style>



 
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

       

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
<!-- formulario de contacto -->

	<form action="validadores/enviacontacto.php" method="post" class="form-consulta" id="form-consulta"> 
		<label>Nombre y apellido: <span>*</span>
			<input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
		</label>
		
		<label>Email: <span>*</span>
			<input type="email" name="email" placeholder="Email" class="campo-form" required>
		</label>
		
		<label>Consulta:
			<textarea name="consulta" class="campo-form"></textarea>
		</label>
            <br>
		<input type="submit" value="Enviar" class="btn-form">
	</form>

<!-- formulario -->
        </div>
</div>

       

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->







    
  
	<body>


	
		

<!--********************INICIO PIE DE PAGINA************************************-->
	<?php 
include 'vistas/footer.php';
?>
<!--********************FIN PIE DE PAGINA************************************-->




