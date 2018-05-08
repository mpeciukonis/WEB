<div class="modal fade" id="modal_prisijungimas" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Prisijungimas</h4>
      </div>
      <div class="modal-body">
        <form class="login-form" action="../app/includes/login.inc.php" method="POST">
          <div class="form-group">
            <label>Elektroninis paštas</label>
            <input type="email" name="email" class="form-control" placeholder="Jūsų elektroninis paštas">
          </div>
          <div class="form-group">
            <label>Slaptažodis</label>
            <input type="password" name="password" class="form-control" placeholder="Jūsų slaptažodis">
          </div>
          <button type="submit" class="btn btn-default" name="submit" />Prisijungti</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
        </form>
      </div>
    </div>
  </div>
</div>
