<?php $contexts = ['team', 'competitor']; ?>
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
          <?php foreach ($criterias as $key => $criteria): ?>

          <div class="full">
              <h3><?php Prints::it($criteria, 'title') ?></h3>

              <p><?php Prints::it($criteria, 'description') ?></p>

              <span class="btn success" data-modal="criteria<?php Prints::it($criteria, 'id'); ?>">Votar</span>
          </div>
          <div class="gt-modal">
              <div id="criteria<?php Prints::it($criteria, 'id'); ?>" class="modal">
                  <button class="modal-close" type="button" name="button">×</button>
                  <div class="modal-header">
                      <h1><?php Prints::it($criteria, 'title') ?></h1>
                  </div>
                  <div class="modal-body">
                      <form class="gt-form text-center" action="index.html" method="post">
                          <?php foreach ($teams as $key => $team): ?>
                              <label class="text-left" for="e1"><?php Prints::it($team, 'name') ?></label>
                              <input data-mirror="e1" type="range" name="grade[]" min="2" max="10" oninput="">
                              <span id="e1" class="tag info">10</span>
                          <?php endforeach; ?>
                          <button class="btn success full" type="submit" name="action" value="store">VOTAR</button>
                      </form>
                  </div>
              </div>
          </div>
          <!-- end first criteria -->
          <?php endforeach; ?>
      </div>
    </section>

    <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
    <script type="text/javascript" src="assets/js/hackathon.js"></script>
  </body>
</html>
