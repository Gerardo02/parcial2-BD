<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>CRUD con Laravel EJ. PARCIAL</title>
  </head>
  <body>
    <div class="container">
    <h1 class="bg-primary text-white text-center mb-3">CRUD con Laravel EJ. PARCIAL</h1>


    <div class="container">
              
        <h2>CREAR REGISTROS</h2>

                <form action="{{ url('create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="" class="form-label">Código</label>
                    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" required>    
                    </div>

                    <div class="mb-3">
                    <label for="" class="form-label">Descripción</label>
                    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" required>
                    </div>

                    <div class="mb-3">
                    <label for="" class="form-label">Cantidad</label>
                    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" required>
                    </div>

                    <div class="mb-3">
                    <label for="" class="form-label">Precio</label>
                    <input id="precio" name="precio" type="number" step="any" class="form-control" tabindex="3" required>
                    </div>

                    <a href="/" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                </form>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
  </body>
</html>