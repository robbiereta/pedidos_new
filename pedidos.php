<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous"></script>
<script src="scripts/quickgrid.min.js"></script>
</head>
<body>
<div id="myGrid"></div>

</body>
<script>
$("#myGrid").quickGrid({
  data: [
    {
      property1: "default, ",
      property2: "no borrar"
    }
  ],
  columns: {
    property1 : {
      visible: true,
      title: "Nombre"
    },
    property2 : {
      title: "Telefono"
    }
  },
})
</script>
</html>