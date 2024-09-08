<?php

    if (!isset($_SESSION["usuarioLogado"]) || !isset($_SESSION["usuarioNome"])){
      header("location:usuario-acessar.php");
    } 

?>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a class="danger" href="usuario-logout.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Sair</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
