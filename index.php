<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location:Sistema/login.php');
    }
    $usuario = $_SESSION['credencial'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Nexum Press Logística & Transporte</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="Style/Dashboard/style.css">
  </head>
  <body>
    <div class="grid-container">
      <!-- Header -->
      <header class="header">
        <div class="menuhamburguer">
          <div class="menu-icon" onclick="openSidebar()">
            <span class="material-icons-outlined">menu</span>
          </div>
        </div>

        <div class="header-right">
          <div class="usuario">
            <?php echo $usuario;?>
            <span class="material-icons-outlined" href="Sistema/logout.php">account_circle</span>
          </div>
          <div class="logout">
            <a href="Sistema/logout.php">
              <span class="material-icons-outlined">logout</span>
            </a>
          </div>
            
        </div>
      </header>
           
      <!--Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
      <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined"><img class="logo-sidebar" src="Style/imagens/LogoNexumAmarela.jpg" alt=""></span> Press L&T
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>
        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">local_shipping</span> Frota
            </a>
          </li>   
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">inventory_2</span> Produtos
            </a>
          </li>   
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">settings</span> Configurações
            </a>
          </li>
        </ul>
      </aside>
      <!--Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">PRODUTOS</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold">249</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">FROTA</p>
              <span class="material-icons-outlined text-red">local_shipping</span>
            </div>
            <span class="text-primary font-weight-bold">56</span>
          </div>

        </div>

        <div class="charts">

          <div class="charts-card">
            AQUI SERÁ O JOIN
          </div
        </div>
      </main>
      <!--Main -->

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <script src="JS/Sidebar/script.js"></script>
  </body>
</html>