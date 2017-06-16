<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">

  </head>
  <body>
    <article class="container">
      <div id="login-container">
        <form id="login-form" method="POST">
          <div>
            <img src="img/logo-night-tools.png" />
          </div>
        <div class="form-group">
          <label>Usuário</label>
          <input name="username" type="text" class="form-control" />
          <span class="erro" id="username-validation"></span>
        </div>
        <div class="form-group">
          <label>Senha</label>
          <input type="password" name="password" type="text" class="form-control" />
          <span class="erro" id="password-validation"></span>
        </div>

        <button type="submit" class="form-control btn btn-primary">
          Entrar
        </button>

        <span id="message-span"></span>
        </form>
      </div>
    </article>

  </body>

  <script src="vendor/jquery/dist/jquery.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.min.js"></script>
  <script src="login.js"></script>

</html>
