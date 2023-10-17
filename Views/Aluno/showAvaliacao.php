<main>
  <div class="container table-responsive p-2 rounded-top div-table mt-5">
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
            <th scope="col">Observacoes</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($list_items as $list) : ?>
            <tr>
              <td><?= date('d/m/Y', strtotime($list['dataAvaliacao'])); ?></td>
              <td><?= $list['peso']; ?></td>
              <td><?= $list['altura']; ?></td>
              <td><?= $list['cintura']; ?></td>
              <td><?= $list['quadril']; ?></td>
              <td><?= $list['coxa']; ?></td>
              <td><?= $list['gordura']; ?></td>
              <td><?= $list['observacoes']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</main>