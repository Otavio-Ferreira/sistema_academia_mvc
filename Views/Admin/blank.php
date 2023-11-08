<main>
  <section class="p-3">
    <div class="d-flex flex-wrap justify-content-around aling-content-around rounded">
      <div class="bg-white card-ind p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-info shadow">
        <div class="w-75">
          <p class="fs-5">
            Data Atual
          </p>
          <p class="fs-4 fw-bold"><?= date('d/m/Y'); ?></p>
        </div>
        <div class="w-25 d-flex flex-wrap justify-content-center aling-content-center">
          <i class="bi bi-calendar bg-info-subtle text-info p-2 fs-1 m-auto rounded"></i>
        </div>
      </div>
      <div class="bg-white card-ind p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-primary shadow">
        <div class="w-75">
          <p class="fs-5">
            Alunos(Qt)
          </p>
          <p class="fs-4 fw-bold"><?= $total_registros['totalRegistros']; ?> Alunos</p>
        </div>
        <div class="w-25 d-flex flex-wrap justify-content-center aling-content-center">
          <i class="bi bi-person-arms-up bg-primary-subtle text-primary p-2 fs-1 m-auto rounded"></i>
        </div>
      </div>
      <div class="bg-white card-ind p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-danger shadow">
        <div class="w-75">
          <p class="fs-5">
            Pendentes
          </p>
          <p class="fs-4 fw-bold"><?= $total_pendencias['totalPendencias']; ?> Pendentes</p>
        </div>
        <div class="w-25 d-flex flex-wrap justify-content-center aling-content-center">
          <i class="bi bi-exclamation-triangle bg-danger-subtle text-danger p-2 fs-1 m-auto rounded"></i>
        </div>
      </div>
      <div class="bg-white card-ind p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-success shadow">
        <div class="w-75">
          <p class="fs-5">
            Pagos
          </p>
          <p class="fs-4 fw-bold"><?= $total_pagos['totalPagos']; ?> Pagos</p>
        </div>
        <div class="w-25 d-flex flex-wrap justify-content-center aling-content-center">
          <i class="bi bi-file-check bg-success-subtle text-success p-2 fs-1 m-auto rounded"></i>
        </div>
      </div>
      <div class="bg-white card-ind p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-dark shadow">
        <div class="w-75">
          <p class="fs-5">
            Balanço Previsto
          </p>
          <p class="fs-4 fw-bold">R$ <?= $balanco_estimado['balancoEstimado']; ?></p>
        </div>
        <div class="w-25 d-flex flex-wrap justify-content-center aling-content-center">
          <i class="bi bi-currency-dollar bg-dark-subtle text-dark p-2 fs-1 m-auto rounded"></i>
        </div>
      </div>
      <div class="bg-white card-ind p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-warning shadow">
        <div class="w-75">
          <p class="fs-5">
            Balanço Atual
          </p>
          <p class="fs-4 fw-bold">R$ <?= $balanco_atual['balancoAtual']; ?></p>
        </div>
        <div class="w-25 d-flex flex-wrap justify-content-center aling-content-center">
          <i class="bi bi-piggy-bank bg-warning-subtle text-warning p-2 fs-1 m-auto rounded"></i>
        </div>
      </div>
    </div>
    <div class="m-3 bg-dark-subtle pt-1 rounded">
      <form method="post" action="<?= BASE_URL; ?>Home">
        <div class="box-search m-3">
          <input type="search" class="form-control w-50" placeholder="Pesquisar" id="pesquisar" name="searchValue">
          <button onclick="searchData()" type="submit" name="submit" class="btn ms-1 bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
          <div class="dropdown">
            <button class="btn ms-1 bg-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Filtrar
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>Home">Todos</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>Home/getAlunoBySituation/pago">Pagos</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>Home/getAlunoBySituation/pendente">Pendentes</a></li>
            </ul>
          </div>
        </div>
      </form>
      <div class="m-3 table-responsive rounded">
        <table class="table table-striped table-bordered bg-white table-hover tabela">
          <thead style="background: #c7d9d2; color: white;">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Mensalidade</th>
              <th scope="col">Data de Pagamento</th>
              <th scope="col">Situação</th>
              <th scope="col"></th>
            </tr>
          </thead>
          </tbody>
          <?php foreach ($list_items as $list) : ?>
            <tr>
              <td><?= $list['id']; ?></td>
              <td><?= $list['name']; ?></td>
              <td><?= $list['mensalidade']; ?></td>
              <td><?= date('d/m', strtotime($list['inscricao'])); ?></td>
              <td><?= $list['situacao']; ?></td>
              <td class='d-flex justify-content-end'>
                <div class='m-1'>
                  <a class='btn btn-secondary' href='<?= BASE_URL ?>Alunos/show/<?= $list['id']; ?>' title='Editar'>
                    <i class="bi bi-pencil-square"></i>
                    Editar
                  </a>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </section>
  <div class="mb-3 mt-3 m-auto inputs">
    <input type="submit" class="form-control m-auto" id="formGroupExampleInput" value="Baixar Relatório" onclick="window.print()">
  </div>
</main>