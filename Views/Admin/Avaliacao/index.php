<section class="p-2 mt-3">
  <div class="d-flex flex-wrap justify-content-around aling-content-aroundrounded">
    <div class="w-100 bg-white card-info p-2 rounded d-flex justify-content-start border-5 border-end border-bottom border-primary shadow">
      <div class="d-flex flex-wrap justify-content-center aling-content-center me-3">
        <i class="bi bi-person-vcard text-primary bg-primary-subtle text-primary p-2 fs-1 m-auto rounded"></i>
      </div>
      <div class="">
        <p class="fs-5">
          Nome
        </p>
        <p class="fs-4 fw-bold"><?= $list_items['name'] ?></p>
      </div>
    </div>

    <!-- <div class="bg-white card-info p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-danger shadow">
      <div class="w-75">
        <p class="fs-5">
          Idade
        </p>
        <p class="fs-4 fw-bold"><?= $list_items['idade'] ?></p>
      </div>
      <div class="w-25 d-flex flex-wrap justify-content-center aling-content-center">
        <i class="bi bi-cake bg-danger-subtle text-danger p-2 fs-1 m-auto rounded"></i>
      </div>
    </div>
    <div class="bg-white card-info p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-success shadow">
      <div class="w-75">
        <p class="fs-5">
          Genero
        </p>
        <p class="fs-4 fw-bold"><?= $list_items['genero'] ?></p>
      </div>
      <div class="w-25 d-flex flex-wrap justify-content-center aling-content-center">
        <i class="bi bg-success-subtle text-success p-2 fs-1 m-auto rounded <?= $list_items['genero'] == 'Masculino' ? 'bi-person-standing' : 'bi-person-standing-dress' ?>"></i>
      </div>
    </div>
    <div class="bg-white card-info p-2 rounded d-flex justify-content-center border-5 border-end border-bottom border-info shadow">
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
  </div> -->
</section>
<section class="p-2 div-cont d-flex flex-wrap m-auto">
  <form action="<?= BASE_URL; ?>Avaliacao/store/<?= $list_items['id']; ?>" method="post" class="bg-primary mt-3 p-2 rounded shadow conteiner-form">
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
      <input type="submit" name="submit" id="submit" class="btn bg-white mt-3 w-100" style="color: #E3813D" value="Adicionar nova Avaliação">
    </div>
  </form>
  <div class="table-responsive bg-primary p-2 mt-3 rounded shadow div-table">
    <table class="table table-striped table-bordered bg-white table-hover tabela">
      <thead style="background: #E3813D; color: white;">
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Dados</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list_items_av as $list) : ?>
          <tr>
            <td class="fw-bold"><?= date('d/m/Y', strtotime($list['dataAvaliacao'])); ?></td>
            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $list['id']; ?>">
                <i class="bi bi-eye"></i>
                Ver
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?= $list['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel"><?= date('d / m / Y', strtotime($list['dataAvaliacao'])); ?></h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= BASE_URL; ?>Perfil/updateAdmin/<?= $list_items['id'] ?>" method="POST" id="div1">
                        <div class="row">
                          <div class="col">
                            <div class="form-floating mt-3">
                              <input type="text" class="form-control" name="peso" id="peso" value="<?= $list['peso']; ?>" required>
                              <label for="peso">Peso</label>
                            </div>
                            <div class="form-floating mt-3">
                              <input type="text" class="form-control" name="altura" id="altura" value="<?= $list['altura']; ?>" required>
                              <label for="altura">Altura</label>
                            </div>
                            <div class="form-floating mt-3">
                              <input type="text" class="form-control" name="cintura" id="cintura" value="<?= $list['cintura']; ?>" required>
                              <label for="cintura">Cintura</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-floating mt-3">
                              <input type="text" class="form-control" name="quadril" id="quadril" value="<?= $list['quadril']; ?>" require>
                              <label for="quadril">Quadril</label>
                            </div>
                            <div class="form-floating mt-3">
                              <input type="text" class="form-control" name="coxa" id="coxa" value="<?= $list['coxa']; ?>" required>
                              <label for="coxa">Coxa</label>
                            </div>
                            <div class="form-floating mt-3">
                              <input type="text" class="form-control" name="gordura" id="gordura" value="<?= $list['gordura']; ?>" required>
                              <label for="gordura">Gordura</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-floating mt-3">
                          <textarea class="form-control" placeholder="Leave a comment here" id="observacaoAtual" name="observacaoAtual" style="height: 100px" required><?= $list['observacoes']; ?></textarea>
                          <label for="observacaoAtual" class="text-secondary">Observações Atuais</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Savar</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <a class='btn btn-danger w-100' href='<?= BASE_URL; ?>Avaliacao/delete/<?= $list['id']; ?>/<?= $list['idAluno']; ?>' title='Deletar Avaliação'>
                <i class="bi bi-trash3"></i>
                Deletar
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>