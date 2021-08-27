<!doctype html>
<html lang="UTF-8">
  <head>
     <title>Monitoramento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

    
    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URL; ?>/assets/css/login.css" rel="stylesheet"/>
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="POST">
    <img class="mb-4" src="https://image.flaticon.com/icons/png/512/120/120797.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Fazer Login</h1>
    
    <input class="form-control" type="email" name="email" placeholder="Digite seu e-mail" />
        <br/>
    <input class="form-control" type="password" name="password" placeholder="Digite sua senha" />


    <input class="w-100 btn btn-lg btn-primary" type="submit" value="Entrar"/>
    <?php if(isset($error) && !empty($error)): ?>
    <div class="warning">
    <?php echo $error; ?></div>
    <?php endif; ?>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>

  </form>
</main>


    
  </body>
</html>
