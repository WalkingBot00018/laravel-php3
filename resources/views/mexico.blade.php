<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mexico.css') }}"> 
   

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
        <h1>México</h1>
    </header>
    <main>
        <h2>¡Bienvenido a México!</h2>
        <p>México es un país lleno de historia, color y sabor. Descubre la riqueza de su cultura, desde las pirámides antiguas hasta la música y la comida tradicional mexicana.</p>
        <img src="{{ asset('img/mexico.jpg') }}" alt="Carnaval de Barranquilla">
    </main>
</body>
</html>
