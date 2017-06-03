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
          <tr>
            <td>
              <img src="assets/img/minilogo.png" alt="Lâmpada" title="Ouro!" class="gold">
              Equipe 1
            </td>
            <td class="text-right">
              <div class="bar" data-percentage="90%" data-color="success" data-tooltip="Test" data-text="90 pts">
            </td>
          </tr>
          <tr>
            <td>
              <img src="assets/img/minilogo.png" alt="Lâmpada" title="Prata!" class="silver">
              Equipe 2
            </td>
            <td class="text-right">
              <div class="bar" data-percentage="50%" data-color="warning" data-tooltip="Test" data-text="50 pts">
            </td>
          </tr>
          <tr>
            <td>
              <img src="assets/img/minilogo.png" alt="Lâmpada" title="Bronze!" class="bronze">
              Equipe 3
            </td>
            <td class="text-right">
              <div class="bar" data-percentage="20%" data-color="danger" data-tooltip="Test" data-text="20 pts">
            </td>
          </tr>
          <tr>
            <td>Equipe 4</td>
            <td class="text-right">
              <div class="bar" data-percentage="0%" data-color="success" data-tooltip="Test" data-text="0 pts">
            </td>
          </tr>
        </tbody>
      </table>
    </section>
    <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
  </body>
</html>
