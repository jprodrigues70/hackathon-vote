
<form action="controllers/competitor_controller.php<?php Prints::it($competitor, 'id', 'get/id'); ?>" method="POST" enctype="multipart/form-data" class="gt-form">
  <div class="inform warning">Os campos com * são obrigatórios.</div>
  <label for="name">Competidor</label>
  <input id="name" type="text" name="name" value="<?php Prints::it($competitor, 'name'); ?>" required>
  <select class="" name="teams_id">
      <?php foreach ($teams as $key => $team): ?>
          <option <?php Prints::select($competitor, 'teams_id', $team->id) ?> value="<?php Prints::it($team, 'id'); ?>"><?php Prints::it($team, 'name'); ?></option>
      <?php endforeach; ?>
  </select>
  <div class="btn-pair">
    <a href="competitor" class="btn danger">Voltar</a>
    <button type="submit" class="btn success" name="action" value="store">Salvar</button>
  </div>
</form>
