<div class="m-3 div-table d-flex flex-wrap">
  <?php foreach ($list_treino as $list) : ?>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $list['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $list['id'] ?>">
            <?= $list['diaSemana'] ?>
          </button>
        </h2>
        <div id="collapse<?= $list['id'] ?>" class="accordion-collapse collapse <?php echo ($list['diaSemana'] == 'Segunda' )? 'show': ''; ?>" data-bs-parent="#accordionExample">
          <div class="accordion-body w-100">
            <table class="table table-striped table-bordered table-hover m-auto">
              <thead style="background: #E3813D; color: black;">
                <tr>
                  <th scope="col">Treino</th>
                  <th scope="col">Series</th>
                  <th scope="col">Repetições</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>
                    <?php foreach ($list['nomeTreino'] as $treino) : ?>
                      <?= $treino ?> <br>
                    <?php endforeach; ?>
                  </th>
                  <th>
                    <?php foreach ($list['serieTreino'] as $treino) : ?>
                      <?= $treino ?> <br>
                    <?php endforeach; ?>
                  </th>
                  <th>
                    <?php foreach ($list['repeticao'] as $treino) : ?>
                      <?= $treino ?> <br>
                    <?php endforeach; ?>
                  </th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
    </div>