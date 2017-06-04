<?php require_once('heart/pulse.php'); ?>
<?php Session::is_up()->pagePermission(90); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hackathon - UFBA</title>
    <link rel="stylesheet" href="bower_components/gaintime/css/gaintime.min.css" media ="screen" title="no title">
    <link rel="stylesheet" href="assets/css/hackathon.min.css" media ="screen" title="no title">
  </head>
  <body class="panel">
      <?php include_once('includes/_headeradmin.inc') ?>
      <section>
        <div class="top-bar">
          <h2>Editar Usuário</h2>
        </div>
        <?php include_once('includes/forms/user.inc') ?>
      </section>
      <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
  </body>
</html>
