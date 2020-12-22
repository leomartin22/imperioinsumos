<!--estilos para bar redes sociales-->
<style>
.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    width:210px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height:43px;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}
.sticky li:hover{
    margin-left:-115px;
}
.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#2C3539;
}
.sticky li p a:hover{
    text-decoration:underline;
}
</style>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Imperio Insumos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quienessomos.php">Quienes Somos</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
         
          
          <!-- Navbar-->
           

          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categorias</h1>
        <div class="list-group">
            <a href="smartband.php" class="list-group-item">SmartBand</a>
             <a href="auriculares.php" class="list-group-item">Auriculares</a>
            <a href="convertidores.php" class="list-group-item">Convertidores Smart TV</a>
            <a href="electro.php" class="list-group-item">Electro</a>
          
         
        </div>

      </div>


<!--inicio codigo bar redessociales-->
      <div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="imagenes/facebook-circle.png" width="32" height="32">
            <p><a href="https://www.facebook.com/programacionnet" target="_blank">Danos Like en<br>Facebook</a></p>
        </li>
        <li>
            <img src="imagenes/twitter-circle.png" width="32" height="32">
            <p><a href="https://twitter.com" target="_blank">Siguenos en<br>Twitter</a></p>
        </li>
        <li>
            <img src="imagenes/gplus-circle.png" width="32" height="32">
            <p><a href="https://plus.google.com" target="_blank">Siguenos en<br>Google+</a></p>
        </li>
        <li>
            <img src="imagenes/instangram-circle.png" width="32" height="32">
            <p><a href="https://www.instangram.com" target="_blank">Siguenos en<br>Instangram</a></p>
        </li>
       
    </ul>
</div>
