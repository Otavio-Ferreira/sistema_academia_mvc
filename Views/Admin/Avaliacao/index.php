<main class="m-auto">
  <div class="container p-2 rounded-top conteinerForm">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome:</label>
      <input type="text" class="form-control inputCaixa1" name="nome" id="nome" value="<?= $list_items['nome'];?>" readonly>
    </div>
    <div class="mb-3">
      <label for="idade" class="form-label">Idade:</label>
      <input type="number" min="1" class="form-control inputCaixa1" id="idade" name="idade" value="<?= $list_items['idade'];?>" readonly>
    </div>
    <div class="mb-3">
      <label for="sexo" class="form-label">Sexo:</label>
      <input type="text" class="form-control inputCaixa1" id="sexo" value="<?= $list_items['genero'];?>" readonly>
    </div>
    <div class="mb-3">
      <label for="avaliação" class="form-label">Data Atual:</label>
      <input type="text" class="form-control inputCaixa1" id="avaliação" value="<?= date('d/m/Y');?>" readonly>
    </div>
  </div>
  <form action="<?= BASE_URL; ?>Avaliacao/store/<?= $list_items['id'];?>" method="post" class="container p-2 rounded-bottom conteinerForm">
      <div>
        <label for="dataAvaliacaoAtual" class="form-label">Data da Avaliação:</label>
        <input type="date" class="form-control" id="dataAvaliacaoAtual" name="dataAvaliacaoAtual" value="" required>
      </div>
    
      <div class="d-flex justify-content-between">
        <div class="mb-3">
          <label for="pesoAtual" class="form-label">Peso:</label>
          <input type="text" class="form-control" id="pesoAtual" name="pesoAtual" style="width: 95%;" value="" required>
        </div>
    
        <div class="mb-3">
          <label for="alturaAtual" class="form-label">Altura:</label>
          <input type="text" class="form-control" id="alturaAtual" name="alturaAtual" style="width: 95%;" value="" required>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Cintura | Quadril | Coxa:</label>
        <div class="d-flex justify-content-between">
          <input type="text" class="form-control w-25" id="cinturaAtual" name="cinturaAtual" value="" required>
          <input type="text" class="form-control w-25" id="quadrilAtual" name="quadrilAtual" value="" required>
          <input type="text" class="form-control w-25" id="coxaAtual" name="coxaAtual" value="" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="gorduraAtual" class="form-label">Percentual de gordura:</label>
        <input type="text" class="form-control" id="gorduraAtual" name="gorduraAtual" value="" required>
      </div>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="observacaoAtual" name="observacaoAtual" style="height: 100px" required></textarea>
        <label for="observacaoAtual" class="text-secondary">Observações Atuais</label>
      </div>
      <div class="d-flex justify-content-center">
        <input type="submit"  name="submit" id="submit" class="btn bg-white mt-3 w-100" style="color: #E3813D" value="Adicionar nova Avaliação">
      </div>
  </form>
  <div class="container table-responsive p-2 rounded-top div-table">
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
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($list_items_av as $list) : ?>
            <tr>
              <td><?= date('d/m/Y', strtotime($list['dataAvaliacao'])); ?></td>
              <td><?= $list['peso']; ?></td>
              <td><?= $list['altura']; ?></td>
              <td><?= $list['cintura']; ?></td>
              <td><?= $list['quadril']; ?></td>
              <td><?= $list['coxa']; ?></td>
              <td><?= $list['gordura']; ?></td>
              <td><?= $list['observacoes']; ?></td>
              <td>
                <a class='btn btn-light btn-sm' href='<?= BASE_URL; ?>Avaliacao/delete/<?= $list['id']; ?>/<?= $list['idAluno'];?>' title='Deletar Avaliação'>
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
</main>