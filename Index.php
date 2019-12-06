<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function solucion1(){
        var densidad = 700;
        var volumen = 14500;
        var gravedad = 9.8; 
        

        var conversion= volumen/1000; 
        var masa = densidad*conversion; 
        var peso = masa*gravedad; 

        var d=document.getElementById("resultado1");
        d.innerHTML="V ="+conversion+" m^3"+"<br>"+"M ="+masa+" Kg"+"<br>"+"W ="+peso+" N";

        
        }
    </script>
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <center><h1>Science Technology Engineerig & Mathematics</h1></center>
    <center><h2>Resolver problemas de Ciencia e Ingeniería con JS</h2></center>
    <center><h2>Nombre: Rivera Salgado Adnuar Alfonso &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. de control: 17091146</h2></center>
    <img class="foto" src="images/foto.jpeg" alt="su foto">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
            <center><h2>Problema</h2></center>
            <h1>Descripción:</h1>
            <p>Calcular la masa y el peso de 14500 litros de gasolina si la densidad de la gasolina es de 700kg/m^3 <br>
      </section>
      <section id="datos">
            <center><h2>Datos</h2></center>
            <p>Densedad = 700 Kg/m<sup>3</sup> <br>
               Volumen = 14500 litros<br>
               Masa = ?<br>
               Peso = ? <br>
               g = 9.8m/m<sup>2</sup><br>
            </p>
      </section>
      <section id="formulas">
            <center><h2>Fórmulas</h2></center>
            <p>P = m/v (Donde: P = densidad, M = masa, V = volumen) <br>
               M = p*v <br>
               W = m*g (Donde: W = peso, g = gravedad)<br>
               V = 14500/1000<br>
            </p>
      </section>
      <section id="solucion">
            <center><h2>Calculos</h2></center>
            <p> V = 14500/1000 <br> 
                M = 700*14.5 <br> 
                W = 10150*9.8 
            </p>
                 
      </section>
      <section id="resultado">
          <center><h2>Solusion</h2></center>
        <center><button class="boton" onclick="solucion1()">Presiona para calcular</button></center>
        <div class=solution id="resultado1">

        </div><br>
      </section>
    </section>
    <footer id="gridPie">
        <p>&copy; Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>
