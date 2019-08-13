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
    <hr>
    <h2>Consulta de manuales</h2>
    Selecciona una moto para consultar sus piezas:
    <br>
    <br>
    <form id="myForm" action="comment.php" method="post">
    <label for="atom">Atom 150</label>
    <select name="" id="atom">
    <option value="atom">Seleciona una parte</option>
    <optgroup label="Motor">
        <option>Cabeza y clindro</option>
    </optgroup>
    </select>
   
  <input type="submit" value="Mostrar piezas">
  </form>
    <div></div>
    
    <!--     -->
    <br>
    <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQrGviYJkQ4UHnZmZiz2yjQPEEkhAV9mK7iPXtGKZOfr4TshQ5nMJNL7UzqMySudyY30Iz75rJSkspb/pubhtml?gid=778975291&amp;single=true&amp;widget=true&amp;headers=false"></iframe>    
</body>
<script> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#myForm').ajaxForm(function() { 
                alert("Thank you for your comment!"); 
            }); 
        }); 
    </script> 
</html>