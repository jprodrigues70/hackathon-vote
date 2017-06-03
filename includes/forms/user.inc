
<form action="controllers/user_controller.php<?php Prints::it($user, 'id', 'get/id'); ?>" method="POST" enctype="multipart/form-data" class="gt-form">
  <div class="inform warning">Os campos com * são obrigatórios.</div>
  <label for="name">Nome</label>
  <input id="name" type="text" name="name" value="<?php Prints::it($user, 'name'); ?>" required>
  <label for="username">Username</label>
  <input id="username" type="text" name="username" value="<?php Prints::it($user, 'username'); ?>" required>
  <label for="level">Nível</label>
  <select class="" name="level">
    <option value="50">Jurado</option>
    <option value="90">Admin</option>
  </select>
  <div class="btn-pair">
    <a href="team" class="btn danger">Voltar</a>
    <button type="submit" class="btn success" name="action" value="store">Salvar</button>
  </div>
</form>
