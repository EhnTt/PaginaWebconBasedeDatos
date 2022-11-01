<?php include("registrarBase.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <title>Login Page.</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="main.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../src/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <form action="easteregg.php" method="post">
        <div class="login-car-container">
          <div class="login-card">
            <div class="login-card-logo">
              <img src="../imagenes/logo4.jpeg" alt="logoperro" width="70%">
            </div>
            <div class="login-card-header">
              <h1>Sign In</h1>
              <div>Please login to use platform</div>
            </div>
            <form class="login-card-form">
              <div class="form-item">
                <span class="Email"></span>
                <input type="text" placeholder="Enter email" id="Email" required autofocus>
              </div>
              <div class="form-item">
                <span class="password"></span>
                <br>
                <input type="password" placeholder="Enter Password" id="Contraseña" required>
              </div>
              <br>
              <div class="form-item-other">

                <br>
              </div>
              <br>
              <button type="submit">Continuar</button>
            </form>

            <div class="login-card-footer">
              <br>
              Don't have an account? <a href="/app/secciones/crearCuenta.php">Create an free account</a>
            </div>
          </div>
        </div>
      </form>
    </div>
    </div>



    </div>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>