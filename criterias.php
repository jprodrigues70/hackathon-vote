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
      <h1>Critérios</h1>
      <table class="gt-table">
          <thead>
              <tr>
                  <th>Critério</th>
                  <th>Ações</th>
              </tr>
          </thead>
          <tbody class="text-center">
              <?php foreach ($criterias as $key => $criteria): ?>
              <tr>
                  <td><?php Prints::it($criteria, 'title') ?></td>
                  <td>
                    <a class="action info" href="edit-criteria<?php Prints::it($criteria, 'id', 'get/id') ?>">Editar</a>
                    <a data-ask="Tem certeza que deseja excluir o critério <?php Prints::it($criteria, 'title'); ?>?" class="action danger" href="controllers/criteria_controller<?php Prints::it($criteria, 'id', 'get/delete') ?>">Excluir</a>
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
