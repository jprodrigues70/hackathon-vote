
<form action="controllers/team_controller.php<?php Prints::it($team, 'id', 'get/id'); ?>" method="POST" enctype="multipart/form-data" class="gt-form">
  <div class="inform warning">Os campos com * são obrigatórios.</div>
  <label for="name">Time</label>
  <input id="name" type="text" name="name" value="<?php Prints::it($team, 'name'); ?>" required>
  <div class="btn-pair">
    <a href="team" class="btn danger">Voltar</a>
    <button type="submit" class="btn success" name="action" value="store">Salvar</button>
  </div>
</form>
