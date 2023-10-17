<div class="container d-block justify-content-center w-100 p-3">
  <form action="<?= BASE_URL; ?>Treino/updateInfoTreino/<?= $list_items['id'] ?>" method="post" class="container d-flex flex-wrap justify-content-center pai">
    <div class="infor">
      <div class="first">
        <input type="text" class="form-control" id="floatingInputAluno" placeholder="Aluno" name="aluno" placeholder="Aluno" value="<?= $list_items['nome'] ?>" readonly>
        <input type="text" class="form-control" id="floatingInputPersonal" name="personal" placeholder="Personal" value="" required>
      </div>
      <div class="second">
        <div id="ob">
          <input type="text" class="form-control obj" placeholder="Objetivo" name="objetivo" value="" required>
        </div>
        <div id="ob2">
          <div class="level">
            <select name="level" id="level" class="ob3" class="form-control" required>
              <option value="Nivel">Nivel</option>
              <option value="Iniciante">Iniciante</option>
              <option value="Intermediario">Intermediário</option>
              <option value="Avançado">Avançado</option>
            </select>
          </div>
          <input type="submit" value="Atualizar Dados" id="enviarInfo" name="enviarInfo" class="btn btn-light ob3">
        </div>
      </div>
    </div>
  </form>
  <div class="container mt-3 mb-5">
    <div class="container d-flex flex-wrap justify-content-center">
      <div class="col-md-4">
        <form action="<?= BASE_URL; ?>Treino/storeInfoTreino/<?= $list_items['id']; ?>" method="post" class="columns container tabletreinos rounded">
          <div class="cabeçalho border-0">
            <select name="diaSemana" class="form-select" id="level" value="Nível" required>
              <option value="Segunda-Feira">Segunda-Feira</option>
              <option value="Terça-Feira">Terça-Feira</option>
              <option value="Quarta-Feira">Quarta-Feira</option>
              <option value="Quinta-Feira">Quinta-Feira</option>
              <option value="Sexta-Feira">Sexta-Feira</option>
            </select>
          </div>
          <input type="submit" value="Criar Treino" class="btn btn-success w-100 ms-3 me-3">
        </form>
      </div>
      <div class="tableResult w-100 p-2 ms-2">
        <table class="table table-striped table-bordered bg-white table-hover tabela mt-2">
          <thead style="background: #E3813D; color: white;">
            <tr>
              <th scope="col">idTreino</th>
              <th scope="col">Dia da semana</th>
              <th scope="col" style="width: 55px;"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($list_treino as $list) : ?>
              <tr>
                <td><?= $list['idTreino']; ?></td>
                <td><?= $list['diaSemana']; ?></td>
                <td class="d-flex">
                  <a class='btn btn-danger me-1' href='<?= BASE_URL; ?>Treino/delete/<?= $list_items['id']; ?>/<?= $list['idTreino']; ?>' title='Deletar Treino'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                      <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z' />
                    </svg>
                  </a>
                  <a class='btn btn-primary' href='<?= BASE_URL; ?>Treino/show/<?= $list_items['id']; ?>/<?= $list['idTreino']; ?>' title='Editar Treino'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                      <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                      <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
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