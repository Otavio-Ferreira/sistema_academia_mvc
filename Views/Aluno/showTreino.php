<main>
  <div class="container bg-primary mt-5 mb-5 p-2 rounded">
    <table class="table table-striped table-bordered bg-white table-hover m-auto">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Nível</th>
          <th scope="col">Objetivo</th>
          <th scope="col">Personal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $list_items['idade'] ?></td>
          <td><?= $list_items['nivel'] ?></td>
          <td><?= $list_items['objetivo'] ?></td>
          <td><?= $list_items['personal'] ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container bg-primary mt-5 p-2 d-flex rounded">
    <div class="w-25 p-1">
      <table class="table table-striped table-bordered bg-white table-hover m-auto">
        <thead>
          <tr>
            <th scope="col">Dia da Semana</th>
          </tr>
        </thead>
        <?php foreach ($list_info_treino as $list) : ?>
          <tbody>
            <tr>
              <td>
                <a type="button" class="btn btn-secondary w-100 <?= (isset($viewData['nivel-t']) && $viewData['nivel-t'] == $list['idTreino']) ? 'active border-dark fw-bold' : ''; ?>" href="<?= BASE_URL . 'HomeAluno/getInfoTreino/'.$list['idTreino']; ?>"><?= $list['diaSemana'] ?></a>
              </td>
            </tr>
          </tbody>
        <?php endforeach; ?>
      </table>
    </div>
    <div class="w-75 p-1">
      <table class="table table-striped table-bordered bg-white table-hover">
        <thead style="background: #E3813D; color: white;">
          <tr>
            <th scope="col">Treino</th>
            <th scope="col">Series</th>
            <th scope="col">Repetições</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($list_treino as $list) : ?>
            <tr>
              <td><?= $list['nomeTreino']; ?></td>
              <td><?= $list['serieTreino']; ?></td>
              <td><?= $list['repeticao']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>