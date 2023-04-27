<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Responsivo con Bootstrap</title>
  <!-- Enlaza los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <style>

    body {
  background-color: black;
  color: white;
  font-family: "Consolas", monospace;
}

.btn-dark:focus {
    background-color: #212529;
    color: #8BC34A;
    border-color: #8BC34A;
}

.btn-dark:focus:hover {
    background-color: #212529;
    color: #8BC34A;
    border-color: #8BC34A;
}

.btn-dark {
    background-color: #343a40;
    color: #fff;
    border-color: #343a40;
}


  </style>
</head>
<header class="text-center"><img src="7zoU.gif" alt=""></header>
<body>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <!--<div class="card border-0 shadow-sm">-->
          <!--<div class="card-body p-4"> -->
            <!--<h2 class="mb-4" style="color:lime;">Iniciar Sesión</h2>-->
            <form>
              <div class="mb-3">
                <input type="email" class="form-control btn-dark" id="email" name="email" placeholder="usuario" required>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control btn-dark" id="password" name="password" placeholder="contraseña" required>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control btn-dark" id="token" name="token" placeholder="token" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
          <!--</div>-->
        <!--</div>-->
      </div>
    </div>
  </div>
  <!-- Enlaza los archivos JS de Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>
