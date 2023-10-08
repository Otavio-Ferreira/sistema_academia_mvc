  <main>
    <section class="d-flex flex-wrap justify-content-center align-content-center mt-5 mb-5">
      <form action="<?= BASE_URL;?>Perfil/updateAdmin/<?= $list_items['id']?>" method="POST">
        <div class="containerDados">
          <div class="editInfor">
              <div>
                <div class="form-floating">
                  <input type="hidden" class="form-control" name="id" id="id">
                  <input type="text" class="form-control" name="nome" id="nome" value="<?= $list_items['name'];?>">
                  <label for="nome">Nome</label>
                </div> <br><br>
        
                <div class="form-floating">
                  <input type="email" class="form-control" name="email" id="Email" value="<?=  $list_items["email"]; ?>">
                  <label for="email">Email</label>
                </div><br><br>
                <input type="submit" id="update" name="update" value="Atualizar Nome e Email">
              </div>
          </div>
        </div>
      </form>
      <form action="<?= BASE_URL;?>Perfil/updateAdminSenha/<?= $list_items['id'];?>" method="POST">
        <div class="containerDados">
          <div class="editInfor">
              <div>
                <div class="form-floating">
                  <div class="mb-2 input-group" >
                    <input type="password" class="form-control" id="senha" name="newPassword" required aria-label="Recipient's username" placeholder="Nova Senha" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="eye">
                      <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg>
                    </span>
                  </div>
                </div> <br><br>
        
                <div class="form-floating">
                  <div class="mb-2 input-group" >
                    <input type="password" class="form-control" id="senha2" name="confirmPassword" required aria-label="Recipient's username" placeholder="Confirmar Senha" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="eye2">
                      <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg>
                    </span>
                  </div>
                </div><br><br>

                <input type="submit" id="update" name="update" value="Atualizar Senha">
              </div>
          </div>
        </div>
      </form>
    </section>
  </main>
