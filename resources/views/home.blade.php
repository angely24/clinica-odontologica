<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinica Odontologica</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<style>
  #logo{
      width: 70px;
  }
  #header{
      margin: 50px;
      font-family: : Segoe UI;
  }


  #card{
      margin:30px;
  }
  #text{
      margin:50px;
  }  
</style>

    
<body  background=".././public/dist/img/home/fondopng.png"  >

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=".././public/dist/img/home/logo.png" alt="logo" id="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Los endodoncistas   
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
          <li>
          tratan específicamente los problemas que afectan el nervio de los dientes. Pueden hacer tratamientos de conducto necesarios cuando hay caries en el nervio del diente.
          </li>
        </ul>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Patólogos y cirujanos orales  
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
            <li>
            se especializan en el tratamiento de las enfermedades orales de los dientes y la mandíbula. Pueden realizar cirugías y trabajar junto con los proveedores de la salud para garganta, nariz y oído (ENT, por sus siglas en inglés).
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Los dentistas generales
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              realizan limpiezas regulares de los dientes y exámenes de rutina. Tu dentista general puede referirte a otros especialistas si necesitas servicios y procedimientos para los cuales no están calificados. La odontología general es uno de los tipos más comunes de odontología.
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Los prostodoncistas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <li>
              reparan los dientes y los huesos de la mandíbula. Realizan odontología estética o tratamientos para mejorar la apariencia de los dientes como blanqueamiento y revestimientos de los dientes. Además, se encarga de las dentaduras postizas, las coronas y los puentes.
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Los periodoncistas 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
            <li>
              ayudan a tratar y curar enfermedades y problemas de las encías. Mientras que el odontólogo general se ocupa de la prevención de las enfermedades de las encías, el periodoncista es quien proporcionará el tratamiento adecuado para el tejido dañado por esta enfermedad progresiva
            </li>
          </ul>
        </li>
      </ul>
      <a class="btn btn-outline-primary" href="seleccionar">INGRESAR</a>
      <div>
        @if (Route::has('register'))
          <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('REGISTRAR') }}</a>
        @endif
      </div>
    </div>
  </div>
</nav>
<h1 id="header" class="text-center">CLINICA ODONTOLOGICA</h1>
<br>
<br>
<div class="container">
    <div class="row">
<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Para Contactarnos Presiona Aqui
</a>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <a class="navbar-brand" href="#"><img src=".././public/dist/img/home/logo.png" alt="logo" id="logo"></a>
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Clinica Odontologica</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      <img src=".././public/dist/img/arreglos/what.png" alt="" width="30px"> <p>41245-12412-1212</p>
    </div>
    <div>
    <img src=".././public/dist/img/arreglos/face.png" alt="" width="30px"> <p>OdontologiaOficial</p>
    </div>
   
    </div>
  </div>
</div>
</div>
</div>

<div id="card" class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Planes Odontologicos</h5>
        <p class="card-text">Las citas de interes se podran: crear, reagendar y aplasar.</p>
        <a href="#" class="btn btn-primary">¡VAMOS A REALIZARLO!</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">¿Quienes Somos?</h5>
        <p class="card-text">Podras Encontrar nuestra politica, nuestro personal, entre otros.</p>
        <a href="#" class="btn btn-primary">¡VAMOS A OBSERVARLO!</a>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="col">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=".././public/dist/img/home/dentista.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=".././public/dist/img/home/carouseldensit.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=".././public/dist/img/home/odonniño.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
<div id="text" class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Elementos básicos de material médico dental</h5>
        <p class="card-text">Debes tener en cuenta que necesitarás un equipo básico para poder ejercer bien tu función como dentista. El equipamiento básico te ayudará a atender a tus pacientes de la mejor manera. Si después te interesa seguir ampliando, es solo cuestión de que te planifiques y contactes, también, con profesionales que se hayan especializado en áreas concretas.
        Veamos, pues, cuál es el material médico imprescindible para tu clínica:
        •	Compresor. La higiene es algo fundamental en una clínica dental, así como en cualquier otro establecimiento sanitario. El compresor se encarga de mantener el aire limpio y seco. Además, evita que las partículas pequeñas puedan llegar a ser absorbidas por nuestros pulmones, tanto los del odontólogo como los del paciente.
        •	Unidad dental. Se trata del sillón articulado donde se sitúa al paciente para poder examinarle y atenderle. La unidad dental debe contar con un regulador de altura y posición para permitir que el dentista trabaje de la manera más cómoda y segura posible.
        •	Escupidera. Necesaria para que el paciente pueda escupir después del tratamiento o para que pueda enjuagarse.
        •	Autoclave. Imprescindible para la desinfección de los utensilios con los que se trabaja.
        •	Aeropulidor. Se trata de una pieza importante para la profilaxis dental. Seca la zona y ayuda a eliminar manchas y placa bacteriana.
        •	Turbina de alta velocidad. Es un aparato rotatorio que gira a gran velocidad y que sirve para horadar la pieza dental y poder eliminar las caries. A esta turbina se le pueden cambiar las fresas y utilizar las del tamaño que se considere necesario.
        </p>
        <p>Además de los materiales básicos, también son necesarios otros para poder realizar más tratamientos en una consulta. A continuación te especificamos cuáles son:
        •	Micromotor. Se trata, también, de un sistema rotatorio, pero de baja velocidad, con el que se tratan problemas pulpares o endodoncias.
        •	Lámpara de unidad dental. Con ella, el dentista será capaz de tener una visión adecuada para poder trabajar sobre la boca del paciente. Además, así evita sombras que le impidan observar correctamente.
        •	Aparato de rayos X. Si existe alguna duda sobre si hay alguna caries interna o algún otro problema no apreciable a simple vista, será necesario poder realizar una radiografía.
        •	Localizador de ápices. Son aparatos utilizados para realizar endodoncias y cuentan con un gancho labial y un sistema de limas.
        •	Lámpara LED. Su función es variable, ya que pueden servir tanto para el blanqueamiento dental como para el secado rápido de los empastes.
        •	Equipo de profilaxis de ultrasonido. Es un sistema profesional de profilaxis para eliminar el sarro y realizar limpiezas bucales.
        •	Negatoscopio, imprescindible para ver las radiografías correctamente.
        •	Motor de aspiración. Es importante para aspirar la saliva y los restos de diente que se desprenden cuando se está realizando un empaste, una endodoncia o cualquier proceso en la boca del paciente.
        </p>
      </div>
    </div>
  </div>

 

    
<footer class="bg-info">
    <div class="row text-center">
        <a href="#" class="col-4 text-reset text-uppercase d-fel aling-items-center">
            <img src=".././public/dist/img/home/logo.png" alt="logo" id="logo">
        </a>
        <ul class="col-4 list-unstyled">
            <li><a href="#" class="text-reset">©️ Todos los derechos de autor :: CLINICA ODONTOLOGICA :: Colombia 2021</a></li>
        </ul>
        <ul class="col-4 list-unstyled">
            <li class="font-weight-bold text-uppercase">REDES SOCIALES:</li>
            <li>
                <a href="#" class="text-reset">
                    <img style="width:8rem;" src=".././public/dist/img/arreglos/twitter.png" alt="twitter" id="twitter">
                </a>
                <a>
                    <img style="width:5rem;" src=".././public/dist/img/arreglos/what.png" alt="whatsapp" id="whatsapp">
                </a>
                <a>
                    <img style="width:5rem;" src=".././public/dist/img/arreglos/face.png" alt="facebook" id="facebook">
                </a>
                <a>
                    <img style="width:5rem;" src=".././public/dist/img/arreglos/instagram.png" alt="instagram" id="instagram">
                </a>
            </li>
        </ul>
    </div>
</footer>

    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
