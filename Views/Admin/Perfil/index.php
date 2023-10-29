  <main>
    <section class="m-5 bg-white p-3 rounded">
      <div>
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link text-dark fw-bold active" id="link1" aria-current="page" onclick="teste(1)">
              <i class="bi bi-person pe-2 fs-5"></i>
              Conta
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" id="link2" onclick="teste(2)">
              <i class="bi bi-lock pe-2 fs-5"></i>
              Segurança
            </a>
          </li>
        </ul>
      </div>
      <div class="w-100">
        <form action="<?= BASE_URL; ?>Perfil/updateAdmin/<?= $list_items['id'] ?>" method="POST" id="div1">
          <div class="d-flex mt-3">
            <i class="bi bi-person-square fs-1 pe-3 text-primary"></i>
            <p class="fs-1 text-primary"><?= $list_items['name'] ?></p>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-floating mt-3">
                <input type="hidden" class="form-control" name="id" id="id">
                <input type="text" class="form-control" name="nome" id="nome" value="<?= $list_items['name']; ?>">
                <label for="nome">Nome</label>
              </div>
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="email" id="email" value="<?= $list_items['email']; ?>">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="grupo" id="grupo" value="<?= $list_items['id_group'] == 3 ? 'Gerente' : 'Personal'; ?>" readonly>
                <label for="grupo">Grupo</label>
              </div>
              <div class="form-floating mt-3">
                <input type="text" class="form-control" name="situacao" id="situacao" value="<?= $list_items['situation'] == 1 ? 'Ativo' : ''; ?>" readonly>
                <label for="situacao">Situação</label>
              </div>
            </div>
          </div>
          <div>
            <input class="btn btn-primary fs-5 mt-4" type="submit" id="update" name="update" value="Salvar mudanças">
          </div>
        </form>
        <form action="<?= BASE_URL; ?>Perfil/updateAdminSenha/<?= $list_items['id'] ?>" method="POST" id="div2" class="d-none">
          <div class="d-flex mt-3">
            <i class="bi bi-person-square fs-1 pe-3 text-primary"></i>
            <p class="fs-1 text-primary"><?= $list_items['name'] ?></p>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-floating">
                <div class="mb-4 input-group">
                  <input type="password" class="form-control" id="senha" name="newPassword" required aria-label="Recipient's username" placeholder="Nova Senha" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="eye">
                    <i class="bi bi-eye fs-4"></i>
                  </span>
                </div>
              </div>
              <div class="form-floating">
                <div class="mt-4 input-group">
                  <input type="password" class="form-control" id="senha2" name="confirmPassword" required aria-label="Recipient's username" placeholder="Confirmar Senha" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="eye2">
                    <i class="bi bi-eye fs-4"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col justify-content-center div-i">
              <i class="bi bi-key text-primary i-pw" style="font-size: 100px;"></i>
              <i class="bi bi-unlock text-primary i-pw" style="font-size: 100px;"></i>
            </div>
          </div>
          <div>
            <input class="btn btn-primary fs-5 mt-4" type="submit" id="update" name="update" value="Salvar nova senha">
          </div>
        </form>
        <!-- <form action="<?= BASE_URL; ?>Perfil/updateAdminSenha/<?= $list_items['id']; ?>" method="POST"  class="d-none">
          <div class="containerDados">
            <div class="editInfor">
              <div>
                <div class="form-floating">
                  <div class="mb-2 input-group">
                    <input type="password" class="form-control" id="senha" name="newPassword" required aria-label="Recipient's username" placeholder="Nova Senha" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="eye">
                      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                      </svg>
                    </span>
                  </div>
                </div> <br><br>

                <div class="form-floating">
                  <div class="mb-2 input-group">
                    <input type="password" class="form-control" id="senha2" name="confirmPassword" required aria-label="Recipient's username" placeholder="Confirmar Senha" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="eye2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                      </svg>
                    </span>
                  </div>
                </div><br><br>

                <input type="submit" id="update" name="update" value="Atualizar Senha">
              </div>
            </div>
          </div>
        </form> -->
      </div>
    </section>
  </main>