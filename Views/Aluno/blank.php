<main>
  <section class="d-flex justify-content-around flex-wrap">
    <div class="boxInformacoes shadow">
      <h2 class="titleInfor">Informações pessoais</h2>
      <form action="">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $list_items['nome']; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="idade" class="form-label">Idade</label>
          <input type="text" class="form-control" id="idade" name="idade" placeholder="Idade" value="<?= $list_items['idade']; ?>" readonly>
        </div>
        <div class="d-flex flex-wrap justify-content-between aling-content-center">
          <a class="btn btn-dark w-100 m-1" href="<?= BASE_URL . 'HomeAluno/getAvaliacao/'.$list_items['id'].'/'.$viewData['email']; ?>">Avaliacao Fisica</a>
          <a class="btn btn-dark w-100 m-1" href="<?= BASE_URL . 'HomeAluno/getTreino/'.$list_items['id'].'/'.$viewData['email']; ?>">Acessar Treino</a>
        </div>
      </form>
    </div>
    <div class="boxInformacoes shadow">
      <h2 class="titleInfor">Informações de contato</h2>
      <form action="">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $list_items['email']; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?= $list_items['telefone']; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereco" value="<?= $list_items['endereco']; ?>" readonly>
        </div>
      </form>
    </div>
    <div class="boxInformacoes shadow">
      <h2 class="titleInfor">Informações sobre o plano</h2>
      <form action="">
        <div class="mb-3">
          <label for="mensalidade" class="form-label">Mensalidade</label>
          <input type="text" class="form-control" id="mensalidade" name="mensalidade" placeholder="Mensalidade" value="<?= $list_items['mensalidade']; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="inscricao" class="form-label">Data de Inscrição</label>
          <input type="text" class="form-control" id="inscricao" name="inscricao" placeholder="Inscricao" value="<?= $list_items['inscricao']; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="situacao" class="form-label">Situacao</label>
          <input type="text" class="form-control" id="situacao" name="situacao" placeholder="situacao" value="<?= $list_items['situacao']; ?>" readonly>
        </div>
      </form>
    </div>
  </section>
</main>