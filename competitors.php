<?php require_once('heart/pulse.php'); ?>
<?php Session::is_up()->pagePermission(90); ?>
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
          <h1>Competidores</h1>
          <a href="new-competitor" class="btn btn-add">Adicionar</a>
      </div>
      <table class="gt-table">
          <thead>
              <tr>
                  <th>Competidor</th>
                  <th>Equipe</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tbody class="text-center">
              <?php foreach ($competitors as $key => $competitor): ?>
              <tr>
                  <td><?php Prints::it($competitor, 'name') ?></td>
                  <td><?php Prints::it($competitor, 'teams_id') ?></td>
                  <td>
                    <a class="action info" href="edit-competitor<?php Prints::it($competitor, 'id', 'get/id') ?>">Editar</a>
                    <a data-ask="Tem certeza que deseja excluir o competidor <?php Prints::it($competitor, 'name'); ?>?" class="action danger" href="controllers/competitor_controller<?php Prints::it($competitor, 'id', 'get/delete') ?>">Excluir</a>
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
