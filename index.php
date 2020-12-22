<?php
include'vistas/header.php';
include 'vistas/menunav.php';
?>



      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="imagenes/principal.jpg" alt="First slide">
            </div>
              <div class="carousel-item">
                  <img  class="d-block img-fluid" src="imagenes/principal2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img  class="d-block img-fluid" src="imagenes/principal4.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img  class="d-block img-fluid" src="imagenes/principal3.png" alt="Fourth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="imagenes2/airdots.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"> Xiaomi Airdots 2</a>
                </h4>
                <h5>$3.000</h5>
                <p class="card-text">Nuevos auriculares inalámbricos Redmi, los Airdots 2.
                                          Mantienen la línea estética y de diseño. Nueva generación Bluetooth 5.0 más rápida y estable
                                     Compatible con XiaoAI, Google Assistant y Siri</p>
              </div>
              <div class="card-footer">
            <a href="#" class="btn btn-primary">Quiero Saber Más!</a>
          </div>
            </div>
          </div>

         

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="imagenes2/chromecast1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Chromecast 3</a>
                </h4>
                <h5>$5.500</h5>
                <p class="card-text">Aprovechá todos los beneficios del famoso Chromecast, con el que le vas a dar un plus 
                    a tu televisor. Este media player te va a permitir acceder a tus películas, series, fotos y sitios web 
                    favoritos. </p>
              </div>
              <div class="card-footer">
            <a href="#" class="btn btn-primary">Quiero Saber Más!</a>
          </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="imagenes2/mi band5.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Xiaomi Mi Band 5</a>
                </h4>
                <h5>$4.300</h5>
                <p class="card-text">Su diseño y construcción permiten que sea un dispositivo sumergible hasta 50 metros de 
                    profundidad, y otra mejora esperada es la 
                    carga magnética. 
                    </div>
              <div class="card-footer">
            <a href="#" class="btn btn-primary">Quiero Saber Más!</a>
          </div>
            </div>
          </div>

         

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php
  include 'vistas/footer.php'
  ?>
