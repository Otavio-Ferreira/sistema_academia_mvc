<main>
    <section id="reconhecimento">
      <form method="post" action="<?= BASE_URL; ?>Home">
        <div class="box-search m-3">
          <input type="search" class="form-control w-50" placeholder="Pesquisar" id="pesquisar" name="searchValue">
          <button onclick="searchData()" type="submit" name="submit" class="btn bg-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
          </button>
          <div class="dropdown">
            <button class="btn bg-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    </section>
    <section class="ConteinerRelat">
      <div class="cabecalho rounded">
        <div class="mb-3 inputs">
          <label for="mes" class="form-label">Data</label>
          <input type="text" class="form-control inputsRelat" id="mes" name="mes" value="<?= date('d/m/Y'); ?>" readonly>
        </div>
        <div class="mb-3 inputs">
          <label for="formGroupExampleInput" class="form-label">Total de Alunos</label>
          <input type="text" class="form-control inputsRelat" id="formGroupExampleInput" readonly value="<?= $total_registros['totalRegistros'];?>">
        </div>
        <div class="mb-3 inputs">
          <label for="formGroupExampleInput" class="form-label">Total de Pendencias</label>
          <input type="text" class="form-control inputsRelat" id="formGroupExampleInput" value="<?= $total_pendencias['totalPendencias'];?>" readonly>
        </div>
        <div class="mb-3 inputs">
          <label for="formGroupExampleInput" class="form-label">Total de Pagos</label>
          <input type="text" class="form-control inputsRelat" id="formGroupExampleInput" value="<?= $total_pagos['totalPagos'];?>" readonly>
        </div>
        <div class="mb-3 inputs">
          <label for="balancoEsperado" class="form-label">Balanço Previsto</label>
          <input type="text" class="form-control inputsRelat" id="balancoEsperado" value="R$ <?= $balanco_estimado['balancoEstimado'];?>" readonly>
        </div>
        <div class="mb-3 inputs">
          <label for="formGroupExampleInput" class="form-label">Balanço do mês</label>
          <input type="text" class="form-control inputsRelat" id="formGroupExampleInput" value="R$ <?= $balanco_atual['balancoAtual'];?>" readonly>
        </div>
      </div>
      <div class="corpo rounded">
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
                <?php foreach ($list_items as $list): ?>
                    <tr>
                        <td><?= $list['id']; ?></td>
                        <td><?= $list['name']; ?></td>
                        <td><?= $list['mensalidade']; ?></td>
                        <td><?= date('d/m', strtotime($list['inscricao'])); ?></td>
                        <td><?= $list['situacao']; ?></td>
                        <td class='d-flex justify-content-end'>
                          <div class='m-1'>
                            <a class='btn btn-secondary'  href='<?= BASE_URL?>Alunos/show/<?= $list['id']; ?>' title='Editar'>
                              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                              </svg>
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