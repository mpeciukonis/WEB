<header>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <?php
      if (isset($_SESSION['u_id'])) {
        echo '<a class="navbar-brand" href="http://localhost/projektas/app/views/profile.php">Sveiki atvykę '.$_SESSION['u_first'].' '.$_SESSION['u_last'].'</a>';
      } else {
        echo '<a class="navbar-brand" href="http://localhost/projektas/public/index.php">Jaunų meistrų aukcionas</a>';
      }
     ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php
                if (isset($_SESSION['u_id'])) {
                  echo '<li class="nav-item">
                    <a class="nav-link" href="http://localhost/projektas/app/includes/logout.inc.php" id="atsijungti">Atsijungti</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/projektas/app/views/ieskoti_darbu.php" id="darbu_sarasas">Ieškoti darbų</a>
                  </li>';
                } else {
                  echo '<li class="nav-item">
                    <a class="nav-link" id="registruotis">Registruotis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="prisijungti">Prisijungti</a>
                  </li>';
                }
               ?>
      </ul>
    </div>
  </nav>
</header>
