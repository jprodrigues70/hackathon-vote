
<form action="controllers/criteria_controller.php<?php Prints::it($criteria, 'id', 'get/id'); ?>" method="POST" enctype="multipart/form-data" class="gt-form">
  <div class="inform warning">Os campos com * são obrigatórios.</div>
  <label for="title">Critério *</label>
  <input id="title" type="text" name="title" value="<?php Prints::it($criteria, 'title'); ?>" required>
  <label for="description">Descrição *</label>
  <textarea name="description" id="description" cols="10" rows="5" ><?php Prints::it($criteria, 'description'); ?></textarea>
  <div class="btn-pair">
    <a href="criterias" class="btn danger">Voltar</a>
    <button type="submit" class="btn success" name="action" value="store">Salvar</button>
  </div>
</form>
