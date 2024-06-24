<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Zoo</title>
</head>
<body>
  <h1 class="text-center mt-5">Bienvenido al Zoologico Zoo</h1>
  <div class="container mt-5 w-50">
    <div class="row">
        <div class="col">
            <p class="text-center">En nuestro zoológico, nos dedicamos a brindar una experiencia única y educativa para toda la familia. Desde majestuosos leones hasta simpáticos monos y fascinantes reptiles, cada rincón de nuestras instalaciones está diseñado para acercarte a la belleza y diversidad de la vida salvaje.</p>
        </div>
        @yield('contenido')
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>