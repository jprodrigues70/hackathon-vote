<?php require_once('heart/pulse.php'); ?>
<?php Session::is_up(); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php include_once('includes/_head.inc') ?>
  </head>
  <body>
    <?php include_once('includes/_header.inc') ?>
    <section class="container">
      <h1>Critérios</h1>
      <div class="content-align">
          <!-- start first criteria -->
          <div>
              <h3>Acessibilidade</h3>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <span class="btn success" data-modal="criteria1">Votar</span>
          </div>
          <div class="gt-modal">
              <div id="criteria1" class="modal">
                  <button class="modal-close" type="button" name="button">×</button>
                  <div class="modal-header">
                      <h1>Acessibilidade</h1>
                  </div>
                  <div class="modal-body">
                      <form class="gt-form text-center" action="index.html" method="post">
                          <label class="text-left" for="e1">Equipe 1</label>
                          <input data-mirror="e1" type="range" name="grade[]" min="2" max="10" oninput="">
                          <span id="e1" class="tag info">10</span>
                          <button class="btn success full" type="submit" name="action" value="store">VOTAR</button>
                      </form>
                  </div>
              </div>
          </div>
          <!-- end first criteria -->
      </div>
    </section>

    <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
    <script type="text/javascript" src="assets/js/hackathon.js"></script>
  </body>
</html>
