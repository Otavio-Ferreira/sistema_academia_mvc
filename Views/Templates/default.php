<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL; ?>Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Load CSS -->
    <?php if(isset($viewData['CSS'])){echo $viewData['CSS'];}; ?>
    <title>Document</title>
</head>
<body>
    <!-- load content -->
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>        
    <!-- load JavaScript -->
    <?php if (isset($viewData['JS'])) {
        echo $viewData['JS'];
    }; ?>
     <script src="<?=BASE_URL;?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>