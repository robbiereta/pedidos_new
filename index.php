<!-- poner checkbox de que moto la quieren y de que parte( chasis) y de que subparte luego le saldran las imagenes el codigo y precio -->
<!-- idea 2 embed una hoja de google sheets de la seccion de la moto que necesiten y copien el codigo y lo consulten -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
   <script src="http://malsup.github.com/jquery.form.js"></script> 
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <dinamic selects query database navbar> -->
    <h2>Consulta de precios</h2>
    Codigo de kurazai:
    <form action="checarPrecio.php" method="post">
    <input type="text" name="codigo" id="">
    <input type="submit" value="Consultar">
    </form>
    <h2>Consulta de manuales</h2>
    Selecciona una moto para consultar sus piezas:
    <br>
    <br>
    <form id="form1" method="post">
    <label >Atom 150</label>
    <select id="location" onchange="setIframeSource()"> 
    <option selected value="relleno.html">Por favor, selecciona una parte</option>
    <option value="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=778975291&amp;single=true&amp;widget=true&amp;headers=false">Cilindro</option>
  </select>
   
  </form>
    <div></div>

    <ul id="userList"></ul>

    <div id="userDetail">
     <!-- <p >Name :<strong class="detailName"></strong></p> -->
    </div>
    
    <!--     -->
    <br>
    <iframe id="myIframe" src="relleno.html"></iframe>    
</body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/6.3.5/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
<script src="app.js"></script>
<script> 
   function setIframeSource() {
   var theSelect = document.getElementById('location');
   var theIframe = document.getElementById('myIframe');
   var theUrl;
 
   theUrl = theSelect.options[theSelect.selectedIndex].value;
   theIframe.src = theUrl;
}
    </script> 
</html>