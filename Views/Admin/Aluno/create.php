<main class="m-auto">
      <form action="<?= BASE_URL; ?>Alunos/store" method="POST">
            <div class="container p-2 rounded-top conteinerForm">
              <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" min="1" class="form-control" id="idade" name="idade" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
              </div>
              <div class="mb-3 d-flex justify-content-evenly border m-auto p-3 mb-2 bg-white rounded-2">
                <label for="situacao" class="form-label">Situação:</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="situacao" id="pago" value="Pago" required>
                  <label class="form-check-label" for="pago">Pago</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="situacao" id="pendente" value="Pendente" required>
                  <label class="form-check-label" for="pendente">Pendente</label>
                </div>
              </div>
            </div>
      
            <div class="container p-2 rounded-bottom conteinerForm">
              <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
              </div>
              <div class="mb-3">
                <label for="mensalidade" class="form-label">Valor da mensalidade:</label>
                <input type="text" class="form-control" id="mensalidade" name="mensalidade" required>
              </div>
              <div class="mb-3">
                <label for="inscricao" class="form-label">Data de Inscrição:</label>
                <input type="date" class="form-control" id="inscricao" name="inscricao" required>
              </div>
              <div class="mb-3 d-flex justify-content-evenly border m-auto p-3 mb-2 bg-white text-dark rounded-2">
                <label class="form-label" for="genero">Sexo:</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="genero" id="feminino" value="Feminino" required>
                  <label class="form-check-label" for="feminino">Feminino</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="genero" id="masculino" value="Masculino" required>
                  <label class="form-check-label" for="masculino">Masculino</label>
                </div>
              </div>
              <label class="form-check-label" for="senha">Senha do aluno:</label>
              <div class="mb-3 input-group" >
                
                <input type="password" class="form-control" id="senha" name="senha" required aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="eye">
                <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
                </span>
                
              </div>
              <div class="d-flex justify-content-center">
                <input type="submit"  name="submit" id="submit" class="btn bg-white" style="color: #E3813D" value="Cadastrar Aluno">
              </div>
            </div>
        </form>
</main>




