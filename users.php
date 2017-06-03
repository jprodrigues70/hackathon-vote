<?php require_once('heart/pulse.php'); ?>
<?php Session::is_up(); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include_once('includes/_head.inc') ?>
  </head>
  <body>
    <?php include_once('includes/_headeradmin.inc') ?>
    <section class="container">
      <?php Session::msg(); ?>
      <div class="top-bar">
          <h1>Usuários</h1>
          <a href="new-user" class="btn btn-add">Adicionar</a>
      </div>
      <table class="gt-table">
          <thead>
              <tr>
                  <th>Username</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tbody class="text-center">
              <?php foreach ($users as $key => $user): ?>
              <tr>
                  <td><?php Prints::it($user, 'username') ?></td>
                  <td>
                    <a class="action info" href="edit-user<?php Prints::it($user, 'id', 'get/id') ?>">Editar</a>
                    <a data-ask="Tem certeza que deseja excluir o usuário <?php Prints::it($user, 'name'); ?>?" class="action danger" href="controllers/user_controller<?php Prints::it($user, 'id', 'get/delete') ?>">Excluir</a>
                  </td>
              </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </section>

    <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
    <script type="text/javascript" src="assets/js/hackathon.js"></script>
  </body>
</html>
