<main>
  <section id="reconhecimento">
    <form method="post" action="<?= BASE_URL; ?>Treino/show">
      <div class="box-search m-3">
        <input type="search" name="searchValue" class="form-control w-50" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" type="submit" class="btn bg-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
        </button>
        <button class="btn bg-white" onclick="window.print()">Download</button>
      </div>
    </form>
  </section>
  <section class="mt-5 mb-5">
    <div class="corpo m-auto">
      <div class="m-3 table-responsive">
        <table class="table table-striped table-bordered bg-white table-hover">
          <thead style="background: #c7d9d2; color: white;">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Personal</th>
              <th scope="col">Nível</th>
              <th scope="col">Treino</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($list_items as $list) : ?>
              <tr>
                <td><?= $list['id']; ?></td>
                <td><?= $list['nome']; ?></td>
                <td><?= $list['nome']; ?></td>
                <td><?= $list['nome']; ?></td>
                <td class='d-flex justify-content-center'>
                  <div class='m-auto'>
                    <a class='btn btn-secondary m-auto' href="<?= BASE_URL; ?>Treino/showTreino/<?= $list['id']; ?>" title='Ver Treino'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16'>
                        <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z' />
                        <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z' />
                      </svg>
                      Visualizar
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
  </section>
</main>