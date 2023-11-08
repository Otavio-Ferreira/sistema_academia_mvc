<section class="container d-flex flex-wrap justify-content-between align-content-center align-items-center bg-body-tertiary rounded shadow p-2 mt-3">
  <div>
    <p class="fs-3 fw-bold m-auto text-primary"><?= $list_items['name'] ?></p>
  </div>
  <div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalNewAv">
      Nova avaliação
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalNewAv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nova avaliação física</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body bg-primary">
            <form action="<?= BASE_URL; ?>Avaliacao/store/<?= $list_items['id']; ?>" method="post" class="">
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
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Adicionar">
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container rounded shadowp-2 p-1 mt-3 d-flex flex-wrap justify-content-center align-content-center">
  <?php foreach ($list_items_av as $list) : ?>
    <div class="bg-body-tertiary card-av rounded shadow p-1">
      <div class="d-flex justify-content-between m-1">
        <div class="">
          <p class="fw-bold fs-2"><?= date('d/m/Y', strtotime($list['dataAvaliacao'])); ?></p>
          <p class="fs-4">Data</p>
        </div>
        <div>
          <i class="bi bi-card-checklist" style="font-size: 80px;"></i>
        </div>
      </div>
      <div class="d-flex">
        <button type="button" class="btn btn-primary m-2 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $list['id']; ?>">
          <i class="bi bi-eye"></i>
          Ver
        </button>

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

        <a class='btn btn-danger m-2 w-100' href='<?= BASE_URL; ?>Avaliacao/delete/<?= $list['id']; ?>/<?= $list['idAluno']; ?>' title='Deletar Avaliação'>
          <i class="bi bi-trash3"></i>
          Deletar
        </a>
      </div>
    </div>
    <!-- <div class="card card-av rounde-0">
      <div class="card-header d-flex flex-wrap justify-content-center">
        <p class="fw-bold fs-4 mt-auto mb-auto me-2"><?= date('d/m/Y', strtotime($list['dataAvaliacao'])); ?></p>
        <i class="bi bi-calendar fs-4 mt-auto mb-auto"></i>
      </div>
      <div class="d-flex">
        <button type="button" class="btn btn-primary m-2 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $list['id']; ?>">
          <i class="bi bi-eye"></i>
          Ver
        </button>

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

        <a class='btn btn-danger m-2 w-100' href='<?= BASE_URL; ?>Avaliacao/delete/<?= $list['id']; ?>/<?= $list['idAluno']; ?>' title='Deletar Avaliação'>
          <i class="bi bi-trash3"></i>
          Deletar
        </a>
      </div>
    </div> -->
  <?php endforeach; ?>

  <!-- <div class="table-responsive bg-primary p-2 mt-3 rounded shadow div-table">
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
              <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $list['id']; ?>">
                <i class="bi bi-eye"></i>
                Ver
              </button>

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
  </div> -->
</section>