<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>Assets/css/styleLogin.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>Assets/css/styleResponsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="<?= BASE_URL; ?>Assets/css/bootstrap.min.css">
</head>
<body>
    <main>
        <div id="containerLogin">
            <div id="logo">
                <img src="<?= BASE_URL; ?>Assets/img/logooficial.png" class="img" alt="">
            </div>
            <div id="login">
                <div id="formlongin">
                    <h1>Login</h1>
                    <form method="post">
                        <div class="mb-3 input-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" <?= (isset($viewData["email"]) && !empty($viewData["email"])) ? "value='" . $viewData["email"] . "'" : ""; ?>>
                            <input type="checkbox" class="btn-check" id="check" name="check" autocomplete="off">
                            <label class="btn btn-outline-light" for="check">Sou Aluno?</label>
                        </div>
                        <div class="mb-3 input-group">
                            <input type="password" class="form-control" id="senha" name="passwd" required aria-label="Recipient's username" aria-describedby="basic-addon2" placeholder="Senha">
                            <span class="input-group-text" id="eye">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                            </span>
                        </div>
                        <input class="btn btn-light w-100" type="submit" name="submit" value="Fazer Login" id="submit">
                            <?php if (isset($viewData["alert"]) && !empty($viewData["alert"])) {
                                echo $viewData["alert"];
                            } ;?>
                    </form>
                </div>
                <div id="create">
                    <p>Esqueceu sua senha?
                        <a class="icon-link icon-link-hover link-dark link-underline-dark" href="<?= BASE_URL.'Login/forgoutPassword';?>">
                            Recuperar
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
           </div>
    </main>
    <footer>

    </footer>
    <script src="<?= BASE_URL; ?>Assets/js/login.js"></script>
    <script src="<?= BASE_URL; ?>Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

