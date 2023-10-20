<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>Assets/css/styleLogin.css">
  <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>Assets/css/styleResponsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="<?= BASE_URL; ?>Assets/css/bootstrap.min.css">
</head>

<body>
  <main class="container border w-auto h-auto shadow p-3 mb-5 bg-body-tertiary rounded">
    <form method="post" class="w-auto h-auto">
      <div class="">
        <div class="modal-header">
          <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Recuperar Senha</h1>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label fs-6">Para recuperar sua senha, informe seu endereço de email que nós enviaremos um link para a alteração de sua senha</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="joao@gmail.com" required>
            <label for="floatingInput">Endereço de email</label>
          </div>
          <div class="col-12">
            <?php if (isset($viewData["alert"]) && !empty($viewData["alert"])) {
              echo $viewData["alert"];
            }; ?>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <a type="button" class="btn btn-secondary" href="<?= BASE_URL;?>login" data-bs-dismiss="modal">Voltar</a>
          <button type="submit" class="btn btn-primary">Redefinir Senha</button>
        </div>
      </div>
    </form>
  </main>
  <footer>

  </footer>
  <script src="<?= BASE_URL; ?>Assets/js/login.js"></script>
  <script src="<?= BASE_URL; ?>Assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>