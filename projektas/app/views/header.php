<header>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Jaunų meistrų aukcionas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php
                if (isset($_SESSION['u_id'])) {
                  echo '<li class="nav-item">
                    <a class="nav-link" href="#" id="atsijungti">Atsijungti</a>
                  </li>';
                } else {
                  echo '<li class="nav-item">
                    <a class="nav-link" href="#" id="registruotis">Registruotis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="prisijungti">Prisijungti</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="ieskoti_darbu">Ieškoti darbų</a>
                  </li>';
                }
               ?>
      </ul>
    </div>
  </nav>
</header>
