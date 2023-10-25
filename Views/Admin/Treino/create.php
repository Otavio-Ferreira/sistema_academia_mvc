<div class="container d-block justify-content-center w-100 p-3">
  <div class="container pai">
    <table class="table table-striped table-bordered bg-white table-hover m-auto">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col">Nível</th>
          <th scope="col">Objetivo</th>
          <th scope="col">Personal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><?= $list_items['name'] ?></th>
          <td><?= $list_items['idade'] ?></td>
          <td><?= $list_items['nivel'] ?></td>
          <td><?= $list_items['objetivo'] ?></td>
          <td><?= $list_items['personal'] ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container mt-3 mb-5">
    <div class="container d-flex flex-wrap justify-content-center">
      <div class="col-md-4">
        <form action="<?= BASE_URL; ?>Treino/store/<?= $list_items['id']; ?>/<?= $id_info_treino; ?>" method="post" class="columns container tabletreinos rounded">
          <div class="cabeçalho border-0">
            <input type="text" class="form-control text-center font-bold fw-bold" value="<?= $list_Info_treino['diaSemana'] ?>" readonly>
          </div>
          <div class="caixaInputs">
            <div class="row">
              <div class="col-md-6">
                <div class="inputsDaCaixa trei" id="tre1">
                  <label for="">Treinos</label> <br>
                  <input class="w-100 mb-2" type="text" name="treino[]">
                </div>
              </div>
              <div class="col-md-3">
                <div class=" flex-column ser" id="ser1">
                  <label for="series">Séries</label> <br>
                  <input class="w-100 mb-2" type="text" name="serie[]">
                </div>
              </div>
              <div class="col-md-3">
                <div class="inputsDaCaixa rep" id="rep1">
                  <label for="repeticoes">Repetições</label> <br>
                  <input class="w-100 mb-2" type="text" name="repeticao[]">
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-primary w-100 m-auto mt-2 mb-2" onclick="add()">
            Adicionar Campo
          </button>
          <input type="submit" value="Adicionar Treino" class="btn btn-success w-100">
        </form>
      </div>
      <div class="tableResult w-100 p-2 ms-2">
        <table class="table table-striped table-bordered bg-white table-hover tabela mt-2">
          <thead style="background: #E3813D; color: white;">
            <tr>
              <th scope="col">Treino</th>
              <th scope="col">Series</th>
              <th scope="col">Repetições</th>
              <th scope="col" style="width: 20px;">Deletar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($list_treino as $list) : ?>
              <tr>
                <td><?= $list['nomeTreino']; ?></td>
                <td><?= $list['serieTreino']; ?></td>
                <td><?= $list['repeticao']; ?></td>
                <td>
                  <a class='btn btn-danger' href='<?= BASE_URL; ?>Treino/deleteTreino/<?= $list_items['id']; ?>/<?= $list['idTreino'];?>/<?= $list['id']?>' title='Deletar Treino'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                      <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z' />
                    </svg>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>