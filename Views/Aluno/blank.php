<main>
  <div class="container mt-5 mb-5 p-2 rounded">
    <table class="table table-striped table-bordered bg-white table-hover m-auto">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $list_items['name']; ?></td>
          <td><?= $list_items['idade'] ?></td>
          <td class="w-25">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Mais Informações
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informações Pessoais</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <ul class="list-group">
                      <li class="list-group-item"><strong>Nome:</strong> <?= $list_items['name']; ?></li>
                      <li class="list-group-item"><strong>Email:</strong> <?= $list_items['email']; ?></li>
                      <li class="list-group-item"><strong>Telefone:</strong> <?= $list_items['telefone']; ?></li>
                      <li class="list-group-item"><strong>Endereço:</strong> <?= $list_items['endereco']; ?></li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container mt-5 p-2 d-flex flex-wrap justify-content-center rounded">
    <div class="p-1">
      <div class="boxInformacoes shadow">
        <h2 class="titleInfor">Avaliação Física e Treino</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Veja Detalhes
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <a class="btn btn-secondary w-100 m-1" href="<?= BASE_URL . 'HomeAluno/getAvaliacao/'; ?>">Avaliacao Fisica</a>
                <a class="btn btn-secondary w-100 m-1" href="<?= BASE_URL . 'HomeAluno/getInfoTreino/'; ?>">Acessar Treino</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-1">
      <div class="boxInformacoes shadow">
        <h2 class="titleInfor">Informações sobre o plano</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapse">
                Veja Detalhes
              </button>
            </h2>
            <div id="flush-collapse" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <div class="mb-3 w-auto">
                  <label for="mensalidade" class="form-label">Mensalidade</label>
                  <input type="text" class="form-control" id="mensalidade" name="mensalidade" placeholder="Mensalidade" value="<?= $list_items['mensalidade']; ?>" readonly>
                </div>
                <div class="mb-3 w-auto">
                  <label for="inscricao" class="form-label">Data de Inscrição</label>
                  <input type="text" class="form-control" id="inscricao" name="inscricao" placeholder="Inscricao" value="<?= $list_items['inscricao']; ?>" readonly>
                </div>
                <div class="mb-3 w-auto">
                  <label for="situacao" class="form-label">Situacao</label>
                  <input type="text" class="form-control" id="situacao" name="situacao" placeholder="situacao" value="<?= $list_items['situacao']; ?>" readonly>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>