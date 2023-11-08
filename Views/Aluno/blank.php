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
  <div class="container mt-5 mb-5 p-2 rounded">
    <table class="table table-striped table-bordered bg-white table-hover m-auto">
      <thead>
        <tr>
          <th scope="col">Mensalidade</th>
          <th scope="col">Data de Inscrição</th>
          <th scope="col">Situação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $list_items['mensalidade']; ?></td>
          <td><?= $list_items['inscricao'] ?></td>
          <td><?= $list_items['situacao'] ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</main>