<?php session_start(); ?>
<div class="modal fade" id="modal_registracija" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registracija</h4>
      </div>
      <div class="modal-body">
        <form class="signup-form" action="../app/includes/signup.inc.php" method="POST">
          <p>Jūsų vardas: <input type="text" name="first" placeholder="Vardas"/><br /></p>
          <p>Jūsų pavardė: <input type="text" name="last" placeholder="Pavardė"/><br /></p>
          <p>Jūsų el. paštas: <input type="text" name="email" placeholder="El. paštas"/><br /></p>
          <p>Jūsų slaptažodis: <input type="password" name="pwd" placeholder="Slaptažodis"/><br /></p>
          <button type="submit" class="btn btn-default" name="submit">Registruotis</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
        </form>
      </div>
      <!-- <div class="modal-footer">

      </div> -->
    </div>
  </div>
</div>
