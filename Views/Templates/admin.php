<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Administrativo</title>

  <link href="<?= BASE_URL; ?>Assets/css/styleSistema.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?= BASE_URL; ?>Assets/img/favicon.png" />
  <link rel="icon" href="<?= BASE_URL; ?>Assets/img/favicon.png" type="image/x-icon" />
  <?php if (isset($viewData['CSS'])) {
    echo $viewData['CSS'];
  }; ?>

</head>

<body class="bg-body-secondary">
  <div class="d-flex min-vh-100">
    <div class="flex-column flex-shrink-0 p-3 bg-body-tertiary nav-desk shadow div-nav" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img class="w-75 m-auto" src="<?= BASE_URL; ?>Assets/img/logo-png.png" alt="">
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Dashboard") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" aria-current="page" href="<?= BASE_URL . 'Home'; ?>">
            <i class="bi bi-speedometer2 pe-none me-2"></i>
            DashBoard
          </a>
        </li>
        <li>
          <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Alunos") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Alunos' ?>">
            <i class="bi bi-person-arms-up pe-none me-2"></i>
            Alunos
          </a>
        </li>
        <li>
          <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Perfil") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Perfil' ?>">
            <i class="bi bi-person-circle pe-none me-2"></i>
            Acessar Perfil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Configurações") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Users' ?>">
            <i class="bi bi-gear pe-none me-2"></i>
            Configurações
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Permissões") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Permissions' ?>">
            <i class="bi bi-person-lock pe-none me-2"></i>
            Permissões
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Paramêtros") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Permissions/addParams' ?>">
            <i class="bi bi-sliders pe-none me-2"></i>
            Paramêtros
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "PerfilAluno") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 3) ? 'd-none' : ''; ?>" aria-current="page" href="<?= BASE_URL . 'HomeAluno'; ?>">
            <i class="bi bi-person-circle pe-none me-2"></i>
            Perfil Aluno
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Treino") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 3) ? 'd-none' : ''; ?>" aria-current="page" href="<?= BASE_URL . 'HomeAluno/getInfoTreino/'; ?>">
            <i class="bi bi-ui-checks-grid pe-none me-2"></i>
            Treino
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Avaliacao") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 3) ? 'd-none' : ''; ?>" aria-current="page" href="<?= BASE_URL . 'HomeAluno/getAvaliacao/'; ?>">
            <i class="bi bi-clipboard2-check pe-none me-2"></i>
            Avaliação Física
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis" href="<?= BASE_URL . 'Login/logout'; ?>">
            <i class="bi bi-box-arrow-right pe-none me-2"></i>
            Sair
          </a>
        </li>
      </ul>
    </div>
    <div class="w-100">
      <nav class="navbar bg-body-tertiary ">
        <div class="container-fluid">
          <button class="navbar-toggler nav-mobile" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-start w-auto" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><?= $viewData['nivel-1'] ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body flex-column flex-shrink-0 p-3 bg-body-tertiary shadow" style="width: 280px;">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img class="w-75 m-auto" src="<?= BASE_URL; ?>Assets/img/logo-png.png" alt="">
              </a>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Dashboard") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" aria-current="page" href="<?= BASE_URL . 'Home'; ?>">
                    <i class="bi bi-speedometer2 pe-none me-2"></i>
                    DashBoard
                  </a>
                </li>
                <li>
                  <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Alunos") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Alunos' ?>">
                    <i class="bi bi-person-arms-up pe-none me-2"></i>
                    Alunos
                  </a>
                </li>
                <li>
                  <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Perfil") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Perfil' ?>">
                    <i class="bi bi-person-circle pe-none me-2"></i>
                    Acessar Perfil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Configurações") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Users' ?>">
                    <i class="bi bi-gear pe-none me-2"></i>
                    Configurações
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Permissões") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Permissions' ?>">
                    <i class="bi bi-person-lock pe-none me-2"></i>
                    Permissões
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-body-emphasis <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Paramêtros") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 4) ? 'd-none' : ''; ?>" href="<?= BASE_URL . 'Permissions/addParams' ?>">
                    <i class="bi bi-sliders pe-none me-2"></i>
                    Paramêtros
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-body-emphasis  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "PerfilAluno") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 3) ? 'd-none' : ''; ?>" aria-current="page" href="<?= BASE_URL . 'HomeAluno'; ?>">
                    <i class="bi bi-person-circle pe-none me-2"></i>
                    Perfil Aluno
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-body-emphasis  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Treino") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 3) ? 'd-none' : ''; ?>" aria-current="page" href="<?= BASE_URL . 'HomeAluno/getInfoTreino/'; ?>">
                    <i class="bi bi-ui-checks-grid pe-none me-2"></i>
                    Treino
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-body-emphasis  <?= (isset($viewData['nivel-1']) && $viewData['nivel-1'] == "Avaliacao") ? 'active text-white' : ''; ?><?= (isset($viewData['id_group']) && $viewData['id_group'] == 3) ? 'd-none' : ''; ?>" aria-current="page" href="<?= BASE_URL . 'HomeAluno/getAvaliacao/'; ?>">
                    <i class="bi bi-clipboard2-check pe-none me-2"></i>
                    Avaliação Física
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link-body-emphasis" href="<?= BASE_URL . 'Login/logout'; ?>">
                    <i class="bi bi-box-arrow-right pe-none me-2"></i>
                    Sair
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <a class="navbar-brand nivel" href="#"><?= $viewData['nivel-2'] ?></a>
          <!-- <a class="position-relative">
            <i class="bi bi-bell pe-none me-2 fs-5 text-dark"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              99+
              <span class="visually-hidden">unread messages</span>
            </span>
          </a> -->
          <div class="d-flex flex-wrap justify-content-center aling-content-center aling-items-center">
            <!-- Button trigger modal -->
            <a class="me-4 rounded-5 position-relative" data-bs-toggle="modal" data-bs-target="#modelNotf">
              <i class="bi bi-bell pe-none fs-2 text-secondary"></i>
              <span class="position-absolute bottom-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?= $viewData['total_notificacoes']['totalNotificacoes']?>
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>

            <!-- Modal -->
            <div class="modal fade" id="modelNotf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class=" modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?php foreach($viewData['list_notificacoes'] as $list_notf):?>
                      <div class="d-flex">
                        <div class="alert alert-danger fw-bold w-75" role="alert">
                          A fatura de <?= $list_notf['name']?> desse mes esta pendente
                        </div>
                        <div class="alert p-0 w-25 ms-2">
                          <a href="#" class="btn btn-danger fs-5 w-100 h-100 d-flex flex-wrap justify-content-center align-content-center">
                            Pagar
                            <i class="bi bi-currency-dollar"></i>
                          </a>
                        </div>
                      </div>
                    <?php endforeach;?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="dropdown-center">
              <a class="fw-bold dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle fs-2 text-secondary"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end">
                <li>
                  <a class="dropdown-item fw-bold" href="#">
                    <i class="bi bi-person-circle pe-none me-2 text-secondary"></i>
                    <?= $viewData['name'] ?>
                  </a>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item fw-bold" href="<?= BASE_URL . 'Perfil'; ?>">
                    <i class="bi bi-person pe-none me-2"></i>
                    Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item fw-bold" href="<?= BASE_URL . 'Login/logout'; ?>">
                    <i class="bi bi-box-arrow-right pe-none me-2"></i>
                    Log out
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <main class="w-100 vh-100 div-main">

        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        <footer class="w-100 text-center">
          <h2 class="">Othek System Academy</h2>
          <p class="">Desenvolvido por Otavio Ferreira</p>
        </footer>
      </main>
    </div>
  </div>
  <script src="<?= BASE_URL; ?>Assets/js/jquery-3.5.1.js"></script>
  <script src="<?= BASE_URL; ?>Assets/js/jquery.mask.js"></script>
  <?php if (isset($viewData['JS'])) {
    echo $viewData['JS'];
  }; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?= BASE_URL; ?>Assets/js/search.js"></script>
</body>

</html>