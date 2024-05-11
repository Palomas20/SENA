<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "citas";


$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos)
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Paraiso Animal</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              Paraiso Animal
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="servicios.html">SERVICIOS </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="redes.html">REDES </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="info.html">¿QUIENES SOMOS?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              </form>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="">
                Telefono: 321 636 5553
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>

  <!-- formulario -->

  <section class="map_section">
    <div id="map" class="h-100 w-100 "></div>

    <div class="form_container ">
      <div class="row">

        <div class="col-md-8 col-sm-10 offset-md-4">
          <form action="#" name="citas" method="post">

            <div class="text-center">
              <h3>
                Contactanos
              </h3>
            </div>
            <div>
              <input type="text" name="nombre" placeholder="Nombre" class="pt-3">
            </div>
            <div>
              <input type="text" name="numero" placeholder="Número">
            </div>
            <div>
              <input type="email" name="correo" placeholder="Correo electronico">
            </div>
            <div>
              <input type="text" name="motivo" class="message-box" placeholder="Motivo de la cita">
            </div>
            <div class="d-flex justify-content-center">
              <button style="background-color:#df9618;" type="submit" name="registro">
                Guardar cita
              </button>
              <style>
                body {
                  background-color: #f1d246;
                }
              </style>

            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- end map section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <style>
      .info_section {
        background-color: #e7ba27;
        /* Cambia el color de fondo */
        color: #ffffff;
        /* Cambia el color del texto si es necesario */
      }

      .info_items {
        padding: 20px;
        /* Agrega un relleno para separar el contenido del borde */
      }

      .item {
        margin-bottom: 20px;
        /* Agrega un espacio entre cada ítem */
      }

      .img-box {
        background-color: #fde493;
        /* Cambia el color del fondo del cuadro de imagen */
      }
    </style>

    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <a href=""></a>
            </div>
            <div class="detail-box">
              <p>
                <a
                  href="https://www.google.com/maps/place/Cra.+12+%2354-32,+Comuna+8,+Cali,+Valle+del+Cauca/@3.4479578,-76.4998524,17z/data=!3m1!4b1!4m6!3m5!1s0x8e30a7abf8e58b75:0x77030b5719cfabcd!8m2!3d3.4479524!4d-76.4972775!16s%2Fg%2F11fsms3z18?authuser=1&entry=ttu">UBICACION
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
            </div>
            <div class="detail-box">
              <a href=""></a>
              <p>
                321 636 5553
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                paraisoanimal@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>

<?php
if (isset($_POST['registro'])) {
  $nombre = $_POST['nombre'];
  $numero = $_POST['numero'];
  $correo = $_POST['correo'];
  $motivo = $_POST['motivo'];

  $insertarDatos = "INSERT INTO citas (nombre, numero, correo, motivo) VALUES ('$nombre', '$numero', '$correo', '$motivo')";
  $ejecutarinsertar = mysqli_query($enlace, $insertarDatos);
}
?>