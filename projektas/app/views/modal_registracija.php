<div class="modal fade" id="modal_registracija" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registracija</h4>
      </div>
      <div class="modal-body">
        <form class="signup-form" action="../app/includes/signup.inc.php" method="POST">
          <div class="form-group">
            <label>Vardas:</label>
            <input type="text" name="first" class="form-control" placeholder="Vardenis" />
          </div>
          <div class="form-group">
            <label>Pavardė:</label>
            <input type="text" name="last" class="form-control" placeholder="Pavardenis" />
          </div>
          <div class="form-group">
            <label>Elektroninis paštas</label>
            <input type="email" name="email" class="form-control" placeholder="pavyzdinis@pastas.lt">
          </div>
          <div class="form-group">
            <label>Slaptažodis</label>
            <input type="password" name="pwd" class="form-control" placeholder="Slaptažodis">
          </div>
          <div class="form-group">
            <label>Pakartokite slaptažodį</label>
            <input type="password" name="pwd_again" class="form-control" placeholder="Slaptažodis">
          </div>
          <div class="form-group">
            <label>Keletą žodžių apie save</label>
            <textarea type="text" name="info" class="form-control" placeholder="Esu pradedantysis/vidutinis/pažengęs meistras, dirbu su medžiu/plastmase/metalu."></textarea>
          </div>
          <small class="form-text text-muted">Prašome naudoti tik lotyniškus simbolius (be lt raidžių)</small><br/>
          <button type="submit" class="btn btn-default" name="submit">Registruotis</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
        </form>
      </div>
    </div>
  </div>
</div>
