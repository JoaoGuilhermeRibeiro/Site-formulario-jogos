<!DOCTYPE html>
<html lang="pt">
<head>
    <title>GAME-BS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/icon/icon.png"><!--icone do site-->
    <link rel="stylesheet" href="./css/bootstrap.min.css"><!--css do site-->
    <link rel="stylesheet" href="./style/style.css"><!-- LINK DE ESTILIZAÇÃO DA PAGINA FEITO POR MIM--->
<!--LINK DO JS-->
    <script defer src="./js/bootstrap.bundle.min.js"></script><!--scritp do site-->
</head>
<body>
<!--NAVBAR DO SITE - INICIO-->
<nav class="navbar navbar-expand-lg bg-write text-success-emphasis">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">GAME-BS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME-PAGE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MENU
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="fotos.php">FOTOS - GAMES</a></li>
            <li><a class="dropdown-item" href="dicas_gameplay.php">DICAS DE GAMES</a></li>
            <li><a class="dropdown-item" href="ajuda.php">AJUDA</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>   
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">PESQUISA</button>
      </form>
    </div>
  </div>
</nav>
<!--  FIM DO NAVBAR --> 
</body>
</html>