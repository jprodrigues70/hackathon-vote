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
          <h1>Times</h1>
          <a href="new-team" class="btn btn-add">Adicionar</a>
      </div>
      <table class="gt-table">
          <thead>
              <tr>
                  <th>Time</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tbody class="text-center">
              <?php foreach ($teams as $key => $team): ?>
              <tr>
                  <td><?php Prints::it($team, 'name') ?></td>
                  <td>
                    <a class="action info" href="edit-team<?php Prints::it($team, 'id', 'get/id') ?>">Editar</a>
                    <a data-ask="Tem certeza que deseja excluir o time <?php Prints::it($team, 'name'); ?>?" class="action danger" href="controllers/team_controller<?php Prints::it($team, 'id', 'get/delete') ?>">Excluir</a>
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
