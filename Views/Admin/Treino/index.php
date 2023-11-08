<section class="container d-flex flex-wrap justify-content-between align-content-center align-items-center bg-body-tertiary rounded shadow p-2 mt-3">
  <div>
    <p class="fs-3 fw-bold m-auto text-primary"><?= $list_items['name'] ?></p>
  </div>
  <div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDados">
      Dados
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalDados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nova avaliação física</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?= BASE_URL; ?>Treino/updateInfoTreino/<?= $list_items['id'] ?>" method="post" class="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" placeholder="name@example.com" value="<?= $list_items['name'] ?>" readonly>
                <label for="nome">Nome</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="personal" name="personal" placeholder="Password" value="<?= $list_items['personal'] ?>">
                <label for="personal">Personal</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="objetivo" name="objetivo" placeholder="Password" value="<?= $list_items['objetivo'] ?>">
                <label for="objetivo">Objetivo</label>
              </div>
              <div class="form-floating">
                <select class="form-select form-select mb-3" id="level" name="level">
                  <option value="<?= $list_items['nivel'] ?>"><?= $list_items['nivel'] ?></option>
                  <option value="Iniciante">Iniciante</option>
                  <option value="Intermediario">Intermediário</option>
                  <option value="Avançado">Avançado</option>
                </select>
                <label for="level">Nível</label>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Atualizar">
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalNewTr">
      Novo treino
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalNewTr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nova avaliação física</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?= BASE_URL; ?>Treino/storeInfoTreino/<?= $list_items['id']; ?>" method="post">
              <div class="cabeçalho border-0">
                <label for="diaSemana" class="fs-4 text-dark m-2 text-right">Selecione o dia da semana</label>
                <select name="diaSemana" class="form-select form-select-lg" id="diaSemana" value="Nível" required>
                  <option value="Segunda-Feira">Segunda-Feira</option>
                  <option value="Terça-Feira">Terça-Feira</option>
                  <option value="Quarta-Feira">Quarta-Feira</option>
                  <option value="Quinta-Feira">Quinta-Feira</option>
                  <option value="Sexta-Feira">Sexta-Feira</option>
                  <option value="Sábado">Sábado</option>
                </select>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Cria treino">
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container rounded shadowp-2 p-1 mt-3 d-flex flex-wrap justify-content-center align-content-center">
  <?php foreach ($list_treino as $list) : ?>
    <div class="bg-body-tertiary card-tr rounded shadow p-1">
      <div class="d-flex justify-content-between m-1">
        <div class="">
          <p class="fw-bold fs-2"><?= $list['diaSemana']; ?></p>
          <p class="fs-4">Dia da semana</p>
        </div>
        <div>
          <img src="<?= BASE_URL; ?>Assets/img/peso.png" alt="">
        </div>
      </div>
      <div class="d-flex">
        <a class='btn btn-primary w-100 m-1' href='<?= BASE_URL; ?>Treino/show/<?= $list_items['id']; ?>/<?= $list['idTreino']; ?>' title='Editar Treino'>
          Editar
          <i class="bi bi-pencil-square"></i>
        </a>
        <a class='btn btn-danger w-100 m-1' href='<?= BASE_URL; ?>Treino/delete/<?= $list_items['id']; ?>/<?= $list['idTreino']; ?>' title='Deletar Treino'>
          Deletar
          <i class="bi bi-trash3"></i>
        </a>
      </div>
    </div>
  <?php endforeach; ?>
</section>