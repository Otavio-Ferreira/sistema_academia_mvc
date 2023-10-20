<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?= $title; ?></h3>
    <strong>Acesse para criar uma senha: </strong> <a href="<?=BASE_URL.$url.'/'.$hash;?>">Acessar</a>
</body>
</html>