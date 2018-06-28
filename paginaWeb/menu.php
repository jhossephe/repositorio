<?php
  session_start();
  $conectado=0;
  if (isset($_SESSION['nomUs'])) {
    $conectado=1;
  }
 ?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">
      <strong>BuyEve</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaProductos.php">Lista de Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo.php">Catalogo</a>
        </li>

        <?php if ($conectado==0) {?>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registrate</a>
        </li>
        <?php }  ?>
        <?php if ($conectado==1) {?>
        <li class="nav-item">
          <a class="nav-link" href="" disabled><?php echo $_SESSION['nomUs']; ?></a>
        </li>
        <?php }  ?>


      </ul>

    </div>
  </div>
</nav>
