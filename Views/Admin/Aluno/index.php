<section>
  <form class="bg-dark-subtle p-2" method="post" action="<?= BASE_URL; ?>Alunos">
    <div class="box-search m-3">
      <input type="search" class="form-control w-50" placeholder="Pesquisar" name="searchValue" id="pesquisar">
      <button onclick="searchData()" type="submit" name="submit" class="btn btn-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
      </button>
      <a data-bs-toggle="modal" data-bs-target="#addUserAluno" class="btn btn-primary fw-bold ms-1">Novo Aluno</a>
      <!-- MODAL ADICIONAR USUARIO -->
      <div class="modal fade" id="addUserAluno" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              Adicionar Usuário
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= BASE_URL; ?>Users/addUserAluno">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <label for="name" class="form-label">Nome</label>
                      <input type="text" id="name" name="name" class="form-control" placeholder="Ex: Joao" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <label for="email" class="form-label">E-mail</label>
                      <input type="text" id="email" name="email" class="form-control" placeholder="Ex: Joao@gmail.com" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer d-flex justify-content-end">
                <button type="submit" class="btn btn-info w-25">Adicionar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
<section class="m-5">
  <div class=" p-2 bg-dark-subtle rounded shadow">
    <!-- class="table  table-striped table-bordered bg-white table-hover tabela" id="datatables-responsive" style="width: 100%;" role="grid" aria-describedby="datatables-reponsive_info -->
    <table class="table  table-striped table-bordered bg-white table-hover m-auto tabela">
      <!-- <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" aria-describedby="example2_info"> -->
      <thead>
        <tr>
          <th>Nome</th>
          <th class="hidden">Email</th>
          <th class="hidden">Telefone</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list_items as $list) : ?>
          <tr>
            <td><?= $list['name']; ?></td>
            <td class="hidden"><?= $list['email']; ?></td>
            <td class="hidden"><?= $list['telefone']; ?></td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $list['id']; ?>">
                Mais
                <i class="bi bi-plus-lg"></i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop<?= $list['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <ul class="list-group">
                        <li class="list-group-item"><strong>Idade: </strong><?= $list['idade']; ?></li>
                        <li class="list-group-item"><strong>Endereço: </strong><?= $list['endereco']; ?></li>
                        <li class="list-group-item"><strong>Mensalidade</strong><?= $list['mensalidade']; ?></li>
                        <li class="list-group-item"><strong>Inscrição</strong><?= (isset($list['inscricao'])) ? date('d/m/Y', strtotime($list['inscricao'])) : ''; ?></li>
                        <li class="list-group-item"><strong>Gênero: </strong><?= $list['genero']; ?></li>
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
            </td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop2<?= $list['id']; ?>">
                Ações
                <i class="bi bi-hand-index"></i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop2<?= $list['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Ações</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Adicionar mais informações para o aluno
                          <a class='btn btn-primary w-25 btn-sm' href="<?= BASE_URL; ?>Alunos/create/<?= $list['id']; ?>" title='Adicionar Informações do aluno'>
                            Adicionar
                          </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Editar informações do aluno
                          <a class='btn btn-secondary w-25 btn-sm' href="<?= BASE_URL; ?>Alunos/show/<?= $list['id']; ?>" title='Editar Aluno'>
                            Editar
                          </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Deletar aluno
                          <a class='btn btn-danger w-25 btn-sm' href='<?= BASE_URL; ?>Alunos/delete/<?= $list['id']; ?>' title='Deletar Aluno'>
                            Deletar
                          </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Adicionar avaliação física para o aluno
                          <a class='btn btn-warning w-25 btn-sm' href='<?= BASE_URL; ?>Avaliacao/index/<?= $list['id']; ?>' title='Avaliação Física'>
                            Avaliacao
                          </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Adicionar treino ao aluno
                          <a class='btn btn-success w-25 btn-sm' href='<?= BASE_URL; ?>Treino/index/<?= $list['id']; ?>' title='Elaborar Treino'>
                            Treino
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>