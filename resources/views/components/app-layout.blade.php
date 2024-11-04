<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=PACIFICO&display=swap" rel="stylesheet">
<style>
  .titulo{ font-family: 'PACIFICO';font-weight: 50px; }
  .contenido { font-family: "KayPhoDu-Bold"; src: url("Fuentes/KayPhoDu-Bold.ttf") format("truetype"); }
</style>
</head>
<body>
  <header>Autos</header>

  <div class="contenido">
       {{$slot}}     <!-- con esto se especifica lo que cambiará -->
  </div>

  <footer>Fin</footer> 
</body>
</html>