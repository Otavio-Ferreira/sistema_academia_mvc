<main>
  <div class="container bg-primary d-flex mt-5 mb-5 p-2 rounded" style="background-color:#E3813D">
    <div class="container table-responsive p-2 rounded-top div-table w-25">
      <table class="table table-striped table-bordered bg-white table-hover tabela">
        <thead style="background: #E3813D; color: white;">
          <tr>
            <th scope="col">Data</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($list_items as $list) : ?>
            <tr>
            <td>
                <a type="button" class="btn w-100 btn-secondary <?= (isset($viewData['nivel-av']) && $viewData['nivel-av'] == $list['dataAvaliacao']) ? 'active border-dark fw-bold' : ''; ?>" href="<?= BASE_URL . 'HomeAluno/getAvaliacao/'.$list['dataAvaliacao']; ?>"><?= date('d/m/Y', strtotime($list['dataAvaliacao'])); ?></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="container table-responsive p-2 rounded-top div-table w-75">
      <table class="table table-striped table-bordered bg-white table-hover tabela">
        <thead style="background: #E3813D; color: white;">
          <tr>
            <th scope="col">Data</th>
            <th scope="col">Peso</th>
            <th scope="col">Altura</th>
            <th scope="col">Cintura</th>
            <th scope="col">Quadril</th>
            <th scope="col">Coxa</th>
            <th scope="col">Gordura</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($list_avaliacao as $list) : ?>
            <tr>
              <td><?= date('d/m/Y', strtotime($list['dataAvaliacao'])); ?></td>
              <td><?= $list['peso']; ?></td>
              <td><?= $list['altura']; ?></td>
              <td><?= $list['cintura']; ?></td>
              <td><?= $list['quadril']; ?></td>
              <td><?= $list['coxa']; ?></td>
              <td><?= $list['gordura']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <table class="table table-striped table-bordered bg-white table-hover tabela">
        <thead style="background: #E3813D; color: white;">
          <tr>
            <th scope="col">Observacoes</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($list_avaliacao as $list) : ?>
            <tr>
              <td><?= $list['observacoes']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>