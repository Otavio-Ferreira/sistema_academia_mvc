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
        <form action="<?= BASE_URL; ?>Treino/store/<?= $list_items['id']; ?>" method="post" class="columns container tabletreinos rounded">
          <div class="cabeçalho">
            <select name="diaSemana" class="form-select" id="level" value="Nível">
              <option value="dia">Dia</option>
              <option value="Segunda-Feira">Segunda-Feira</option>
              <option value="Terça-Feira">Terça-Feira</option>
              <option value="Quarta-Feira">Quarta-Feira</option>
              <option value="Quinta-Feira">Quinta-Feira</option>
              <option value="Sexta-Feira">Sexta-Feira</optionx>
            </select>
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
              <th scope="col">#</th>
              <th scope="col">Dia da semana</th>
              <th scope="col" style="width: 20px;">Deletar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($list_treino as $list) : ?>
              <tr>
                <td><?= $list['id']; ?></td>
                <td><?= $list['diaSemana']; ?></td>
                <td>
                  <a class='btn btn-danger' href='<?= BASE_URL; ?>Treino/delete/<?= $list_items['id']; ?>/<?= $list['id']; ?>' title='Deletar Treino'>
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