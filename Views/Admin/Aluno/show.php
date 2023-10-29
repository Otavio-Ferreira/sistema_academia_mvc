<main class="m-auto">
  <form action="<?= BASE_URL; ?>Alunos/update/<?= $list_items['id']; ?>" method="POST" class="ms-5 me-5">
    <div class="d-flex mt-3">
      <i class="bi fs-1 pe-1 text-primary <?= $list_items['genero'] == 'Masculino'? 'bi-person-standing':'bi-person-standing-dress'?>"></i>
      <p class="fs-1 text-primary"><?= $list_items['name'] ?></p>
    </div>
    <div class="row-form flex-wrap justify-content-center aling-content-center">
      <div class="col m-1">
        <div class="form-floating mt-3">
          <input type="text" class="form-control" name="nome" id="nome" value="<?= $list_items['name']; ?>">
          <label for="nome">Nome</label>
        </div>
        <div class="form-floating mt-3">
          <input type="text" class="form-control" name="email" id="email" value="<?= $list_items['email']; ?>">
          <label for="email">Email</label>
        </div>
        <div class="form-floating mt-3">
          <input type="tel" class="form-control" name="telefone" id="telefone" value="<?= $list_items['telefone']; ?>">
          <label for="telefone">Telefone</label>
        </div>
        <div class="form-floating mt-3">
          <input type="text" class="form-control" name="endereco" id="endereco" value="<?= $list_items['endereco']; ?>">
          <label for="endereco">Endereço</label>
        </div>
        <div class="form-floating mt-3">
          <select class="form-select form-select mb-3" id="genero" name="genero">
            <option value="<?= $list_items['genero'] ?>"><?= $list_items['genero'] ?></option>
            <option value="<?= $list_items['genero'] == 'Masculino' ? 'Feminino' : 'Masculino'; ?>"><?= $list_items['genero'] == 'Masculino' ? 'Feminino' : 'Masculino'; ?></option>
          </select>
          <label for="genero">Gênero</label>
        </div>
      </div>
      <div class="col m-1">
        <div class="form-floating mt-3">
          <input type="number" class="form-control" name="idade" id="idade" value="<?= $list_items['idade']; ?>">
          <label for="idade">Idade</label>
        </div>
        <div class="form-floating mt-3">
          <input type="text" class="form-control" name="mensalidade" id="mensalidade" value="<?= $list_items['mensalidade']; ?>">
          <label for="mensalidade">Mensalidade</label>
        </div>
        <div class="form-floating mt-3">
          <input type="date" class="form-control" name="inscricao" id="inscricao" value="<?= $list_items['inscricao']; ?>">
          <label for="inscricao">Inscrição</label>
        </div>
        <div class="form-floating mt-3">
          <select class="form-select form-select mb-3" id="situacao" name="situacao">
            <option value="<?= $list_items['situacao'] ?>"><?= $list_items['situacao'] ?></option>
            <option value="<?= $list_items['situacao'] == 'Pago' ? 'Pendente' : 'Pago'; ?>"><?= $list_items['situacao'] == 'Pago' ? 'Pendente' : 'Pago'; ?></option>
          </select>
          <label for="situacao">Situação</label>
        </div>
        <div>
          <input class="btn btn-primary fs-5 mt-2 w-100" type="submit" id="update" name="update" value="Salvar mudanças">
        </div>
      </div>
    </div>
  </form>
</main>