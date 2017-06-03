<?php $contexts = ['team', 'criteria']; ?>
<?php require_once('heart/pulse.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include_once('includes/_head.inc') ?>
  </head>
  <body class="panel">
    <?php if (Session::permission(90)): ?>
        <?php include_once('includes/_headeradmin.inc') ?>
    <?php else: ?>
        <?php include_once('includes/_header.inc') ?>
    <?php endif; ?>
    <section>
      <h1>Ranking</h1>

      <table class="gt-table striped hovered text-center">
        <thead>
          <th>Equipe</th>
          <th>Pontuação</th>
        </thead>
        <tbody>
        <?php foreach ($results as $key => $result): ?>
            <tr>
                <td>
                    <?php if ($key < 3): ?>
                        <img src="assets/img/minilogo.png" alt="Lâmpada" <?php $tm->getMedal($key); ?>>
                    <?php endif; ?>
                    <?php Prints::it($result, 'name'); ?>
                </td>
                <td class="text-right">
                <div class="bar" data-percentage="<?php echo (($result->result*10/$criteria_size)); ?>%" data-color="success" data-tooltip="<?php Prints::it($result, 'result') ;?> pts" data-text="<?php Prints::it($result, 'result') ;?> pts">
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </section>
    <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
  </body>
</html>
