<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/colombia.css') }}"> 
   

    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light  " >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">INICIO <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('/peru') }}">PERU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('/bolivia') }}">BOLIVIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('/mexico') }}">MEXICO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('/brasil') }}">BRASIL</a>
      </li>
    </ul>
  </div>
</nav> 


    <header>
        <h1>Colombia </h1>
    </header>
    <main>
        <h2>¡Bienvenido a Colombia!</h2>
        <p>Colombia es un hermoso país ubicado en América del Sur. Está lleno de diversidad, cultura, historia y paisajes impresionantes. A continuación, te presentamos algunas de las maravillas de Colombia.</p>

        <h2>Paisajes Naturales</h2>
        <p>Colombia es conocida por sus paisajes naturales variados que incluyen playas tropicales, selvas exuberantes, montañas majestuosas y selvas tropicales. Uno de los lugares más emblemáticos es el Parque Nacional Natural Tayrona, con sus playas de arena blanca y aguas cristalinas.</p>
        <img src="{{ asset('img/tayrona.jpg') }}" alt="Parque Nacional Natural Tayrona">

        <h2>Gastronomía Colombiana</h2>
        <p>La gastronomía colombiana es rica y diversa. Prueba platos tradicionales como la bandeja paisa, el ajiaco, y la arepa. Además, no puedes dejar de probar el café colombiano, que es famoso en todo el mundo.</p>
        <img src="{{ asset('img/bandejapaisa.jpg') }}" alt="Bandeja Paisa">

        <h2>Cultura y Tradiciones</h2>
        <p>Colombia es un país lleno de cultura y tradiciones. Disfruta de festivales como el Carnaval de Barranquilla y el Festival de Vallenato. La música y la danza son parte fundamental de la vida colombiana.</p>
        <img src="{{ asset('img/carnaval.jpg') }}" alt="Carnaval de Barranquilla">
    </main>
</body>
</html>
