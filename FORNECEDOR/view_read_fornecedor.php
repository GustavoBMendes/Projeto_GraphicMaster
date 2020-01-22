<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../_css/style.css">
    <link rel="stylesheet" href="../../_css/form_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <title>Graphic Master - Acesso ao fornecedor</title>
</head>
<body>
<header>
<div class="topnav">
  <img src="../../_images/logo.png" alt="logo" class="logo-gm">
  <a class="active" href="../view_login.php">Logout</a>
  <a class="active" href="../../SGO_facade.php">Inicio</a>
</div>
</header>
<div class="sidebar">
  <a href="view_create_fornecedor.php">Cadastrar fornecedor</a>
  <a class="active">Acessar fornecedor</a>
  <a href="view_update_fornecedor.php">Atualizar fornecedor</a>
  <a href="view_delete_fornecedor.php">Deletar fornecedor</a>
</div>


<div class="content">
  
<h1 class="titulos">Consulta de fornecedor</h1>
<div class="container">
  <form action="action_page.php" method="get">
    <div class="row">
      <div class="col-25">
        <label class="labels">ID do fornecedor</label>
      </div>
      <div class="col-75">
        <input type="text" name="id_fornecedor" placeholder="1,2..45">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Confirmar">
    </div>
  </form>
</div>
  
</div>
    
</body>

</html>