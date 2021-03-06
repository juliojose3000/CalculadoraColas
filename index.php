<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Expertos</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">	
<script>
$(document).ready(function () {
$("#form_mm1").submit(function () {
  var datosFormulario = $(this).serialize();
  $.getJSON("Controllers/MM1Controller.php", datosFormulario, procesarDatosMM1);
  return false;
  });
  function procesarDatosMM1(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
  $("#divMM1").html("<p>"+datos_devueltos.Resultado+"</p>");
  }

  $("#form_md1").submit(function () {
  var datosFormulario = $(this).serialize();
  $.getJSON("Controllers/MD1Controller.php", datosFormulario, procesarDatosMD1);
  return false;
  });
  function procesarDatosMD1(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
  $("#divMD1").html("<p>"+datos_devueltos.Resultado+"</p>");
  }
  $("#form_mmm").submit(function () {
  var datosFormulario = $(this).serialize();
  $.getJSON("Controllers/MMMController.php", datosFormulario, procesarDatosMMM);
  return false;
  });
  function procesarDatosMMM(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
  $("#divMMM").html("<p>"+datos_devueltos.Resultado+"</p>");
  }
  $("#form_mm1Infinito").submit(function () {
  var datosFormulario = $(this).serialize();
  $.getJSON("Controllers/MM1InfinitoController.php", datosFormulario, procesarDatosMM1Infinito);
  return false;
  });
  function procesarDatosMM1Infinito(datos_devueltos) { // datosDeuveltos es el json que viene de PHP
  $("#divMM1I").html("<p>"+datos_devueltos.Resultado+"</p>");
  }




});
</script>
<style>
header {
  padding: 156px 0 100px;
}

section {
  padding: 150px 0;
}


</style>

</head>

<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Calculadora de colas IF7200</a>
    </div>
    <div class="collapse navbar-collapse " id="navbarResponsive">
    <ul class="nav navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#content0">Integrantes</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#content1">Calculadora M/M/1</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#content2">Calculadora M/M/m</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#content3">Calculadora M/D/1</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#content4">Calculadora M/M/1 con fuente finita</a></li>
    </ul>
    </div>
  </div>
</nav>

<section id="content0" class="container">
    <div class="row">  
        <p class="western" align="justify" lang="es-ES">
    <font size="3">
    <b>Integrantes</b>
    </font>
</p>
<div class="col-md-12">
  
  Juan Araya Mart&iacute;nez
   <br></br>
  Julio Segura Chaves
   <br></br>
  Jeison Segura Rivera
    <br></br>
  Allan Solano Salazar
    <br></br>
  Hans Villalobos Quir&oacute;s 
</div>
</section>

<section id="content1" class="container">
    <div class="row">  
        <p class="western" align="justify" lang="es-ES">
    <font size="3">
    <b>Modelo M/M/1</b>
    </font>
</p>

<div class="col-md-12">
  
   Para utilizar la calculadora de colas M/M/1 modelo de un solo canal con llegadas Poisson  ingrese:
   <br></br>
   &Lambda;= n&uacute;mero de llegadas por periodo (por ejemplo, por hora)
   <br></br>
    &mu;= número medio de personas o art&iacute;culos que se atienden por periodo
    <br></br>
    k = valor del n&uacute;mero  k
</div>

<br>
<form  id="form_mm1" nmae="form_mm1" action="Controllers/MM1Controller.php" method="get">
<table><tr>
           <tr>
             <td>&Lambda;:</td>
             <td><input type="number" step="0.0000001"  required name="lambda" id="lambda"></td>
           </tr>
           <tr>
             <td>&mu;:</td>
             <td><input type="number" step="0.0000001"  required name="mu" id="mu"></td>
           </tr>
           <tr>
             <td>k:</td>
             <td><input type="number" step="0.0000001"  required name="k" id="k"></td>
           </tr>
           <tr><td colspan="2"> <input type="submit" name="boton1" id="boton1" value="Calcular">
        </td></tr></table>
</form>
</div>
Resultado:<div id="divMM1"></div>
</section>

<section id="content2" class=container>
<div class="row">  
        <p class="western" align="justify" lang="es-ES">
    <font size="3">
 
    <b>Modelo M/M/m</b>
    </font>
</p>

<div class="col-md-12">
  
   Para utilizar la calculadora de colas M/M/M modelo de canales m&uacute;ltiples  con llegadas Poisson  ingrese:
   <br></br>
   &Lambda;= n&uacute;mero de llegadas por periodo (por ejemplo, por hora)
   <br></br>
    &mu;= número medio de personas o art&iacute;culos que se atienden por periodo
    <br></br>
     m = n&uacute;mero de canales abiertos
</div>

<br>
<form  id="form_mmm" action="/Controllers/MMMController.php" method="get">
<table><tr>
           <tr>
             <td>&Lambda;:</td>
             <td><input type="number" step="0.0000001"  required name="lambda" id="lambda"></td>
           </tr>
           <tr>
             <td>&mu;:</td>
             <td><input type="number" step="0.0000001"  required name="mu" id="mu"></td>
           </tr>
           <tr>
             <td>M:</td>
             <td><input type="number" step="0.0000001"  required name="m" id="m"></td>
           </tr>
           <tr><td colspan="2"> <input type="submit" name="boton2" id="boton2" value="Calcular">
        </td></tr></table>
</form>

</div>
Resultado:<div id="divMMM"></div>
</section>
<section id="content3" class=container>
<div class="row">  
        <p class="western" align="justify" lang="es-ES">
    <font size="3">
 
    <b>Modelo M/D/1</b>
    </font>
</p>

<div class="col-md-12">
  
   Para utilizar la calculadora de colas M/D/1 modelo de tiempo de servicio constante:
   <br></br>
   &Lambda;= n&uacute;mero de llegadas por periodo (por ejemplo, por hora)
   <br></br>
    &mu;=  n&uacute;mero medio de personas o art&iacute;culos que se atienden por periodo
    <br></br>
</div>

<br>
<form  id="form_md1" action="Controllers/MD1Controller.php" method="get">
<table><tr>
           <tr>
             <td>&Lambda;:</td>
             <td><input type="number" step="0.0000001"  required name="lambda" id="lambda"></td>
           </tr>
           <tr>
             <td>&mu;:</td>
             <td><input type="number" step="0.0000001"  required name="mu" id="mu"></td>
           </tr>
           <tr><td colspan="2"> <input type="submit" name="boton3" id="boton3" value="Calcular">
        </td></tr></table>
</form>
</div>
Resultado:<div id="divMD1"></div>

</section>
<section id="content4" class=container>
<div class="row">  
        <p class="western" align="justify" lang="es-ES">
    <font size="3">
 
    <b>Modelo M/M/1 con fuente finita</b>
    </font>
</p>

<div class="col-md-12">
  
   Para utilizar la calculadora de colas  M/M/1 con fuente finita:
   <br></br>
   &Lambda;= n&uacute;mero de llegadas por periodo (por ejemplo, por hora)
   <br></br>
    &mu;=  n&uacute;mero medio de personas o art&iacute;culos que se atienden por periodo
    <br></br>
     N= tama&ntilde;o  de la poblaci&oacute;n
    <br></br>
</div>

<br>
<form  id="form_mm1Infinito" action="Controllers/MM1InfinitoController.php" method="get">
<table><tr>
           <tr>
             <td>&Lambda;:</td>
             <td><input type="number" step="0.0000001"  required name="lambda" id="lambda"></td>
           </tr>
           <tr>
             <td>&mu;:</td>
             <td><input type="number" step="0.0000001"  required name="mu" id="mu"></td>
           </tr>
           <tr>
             <td>N:</td>
             <td><input type="number" step="0.0000001"  required name="N" id="N"></td>
           </tr>
           <tr><td colspan="2"> <input type="submit" name="boton4" id="boton4" value="Calcular">
        </td></tr></table>
</form>

</div>
Resultado:<div id="divMM1I"></div>
</section>

</html>