<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Administrativo</title>

    <link href="<?= BASE_URL; ?>Assets/css/styleSistema.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?= BASE_URL; ?>Assets/img/favicon.png" />
    <link rel="icon" href="<?= BASE_URL; ?>Assets/img/favicon.png" type="image/x-icon"/>
    <?php if(isset($viewData['CSS'])){echo $viewData['CSS'];}; ?>
    
</head>

<body>
<header>
    <nav class="navbar navbar-dark bg-dark fixed-top position-static">
      <div class="container-fluid">
        <p id="subname"><span id="othek">OTHEK</span> SYSTEM ACADEMY</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title titlearea" id="offcanvasDarkNavbarLabel">Área de navegação</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item naveg">
                <a class="nav-link  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Perfil")?'active':''; ?>" aria-current="page" href="<?= BASE_URL.'HomeAluno';?>">Perfil</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Treino")?'active':''; ?>" aria-current="page" href="<?= BASE_URL.'HomeAluno/getInfoTreino/';?>">Treino</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Avaliacao")?'active':''; ?>" aria-current="page" href="<?= BASE_URL.'HomeAluno/getAvaliacao/';?>">Avaliação Física</a>
              </li>
              <li class="nav-item naveg">
                <a class="nav-link" href="<?= BASE_URL.'Login/logout';?>">Sair</a>
              </li>
          </div>
          <div class="offcanvas-footer">
              <img src="img/logo-p.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </nav>
  </header>
    <main>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </main>
    <footer class="footer m-auto">
        <h2 class="text-center">Othek System Academy</h2>
        <p class="text-center">Desenvolvido por Otavio Ferreira</p>
    </footer>
    <script src="<?= BASE_URL; ?>Assets/js/jquery-3.5.1.js"></script>
    <script src="<?= BASE_URL; ?>Assets/js/jquery.mask.js"></script>
    <?php if(isset($viewData['JS'])){echo $viewData['JS'];}; ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?= BASE_URL; ?>Assets/js/search.js"></script>
</body>
</html>