<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">

  </head>
  <body>
    <article class="container">
      <div id="login-container">
        <form action="fazer_login.php" method="POST">
          <div>
            <img src="img/logo-night-tools.png" />
          </div>
        <div class="form-group">
          <label>Usuário</label>
          <input name="username" type="text" class="form-control" />
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input  name="password" type="text" class="form-control" />
        </div>

        <button type="submit" class="form-control btn btn-primary">
          Entrar
        </button>
        </form>
      </div>
    </article>

  </body>

  <script src="vendor/jquery/dist/jquery.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

</html>
