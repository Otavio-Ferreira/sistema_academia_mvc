<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>Assets/css/styleLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="d-flex flex-wrap justify-content-center aling-content-center ">
        <div class="w-50 vh-100 bg-black flex-wrap justify-content-center aling-content-center bg-logo shadow-lg">
            <img class="m-auto logo" src="<?= BASE_URL; ?>Assets/img/logooficial.png" alt="">
        </div>
        <div class="vh-100 d-flex flex-wrap justify-content-center aling-content-center bg-form">
            <form method="post" class="mt-auto mb-auto ms-5 me-5 p-5 border bg-body-tertiary rounded shadow form">
                <div class="border-bottom border-3 mb-3">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <label for="email">Endereço de email</label>
                    </div>
                    <div class="d-flex">
                        <div class="form-floating mb-3 w-75">
                            <input type="password" class="form-control" id="senha" name="passwd" placeholder="Password">
                            <label for="senha">Senha</label>
                        </div>
                        <span class="input-group-text form-floating ms-1 mb-3 w-25" id="eye">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill m-auto" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                        </span>
                    </div>
                    
                    <div class="mb-3">
                        <input type="submit" class="w-100 btn btn-lg btn-primary" id="floatingPassword" value="Avançar">
                    </div>
                    <?php if (isset($viewData["alert"]) && !empty($viewData["alert"])) {
                        echo $viewData["alert"];
                    }; ?>
                </div>
                <div>
                    <div class="mb-3">
                        <a type="button" href="<?= BASE_URL . 'Login/forgoutPassword'; ?>" class="w-100 btn btn-lg btn-outline-dark" id="floatingPassword">Esqueceu sua senha?</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="<?= BASE_URL; ?>Assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>