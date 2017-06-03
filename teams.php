<?php $contexts = ['competitor', 'criteria']; ?>
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
      <h1>Equipes</h1>
      <div class="content-align">

          <?php foreach ($teams as $key => $team): ?>
          <div class="card" data-modal="team2">
              <h3><?php Prints::it($team, 'name') ?></h3>
              <ul>
                <?php foreach ($competitors as $key => $competitor): ?>
                    <?php if ($team->id == $competitor->teams_id): ?>
                        <li><?php Prints::it($competitor, 'name') ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
              </ul>
          </div>
          <div class="gt-modal">
              <div id="team2" class="modal">
                  <button class="modal-close" type="button" name="button">×</button>
                  <div class="modal-header">
                      <h1><?php Prints::it($team, 'name') ?></h1>
                  </div>
                  <div class="modal-body">
                      <form class="gt-form text-center" action="index.html" method="post">
                          <label class="text-left" for="c1">XXX</label>
                          <input data-mirror="c1" type="range" name="grade[]" min="2" max="10" oninput="">
                          <span id="c1" class="tag info">10</span>
                          <button class="btn success full" type="submit" name="action" value="store">VOTAR</button>
                      </form>
                  </div>
              </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
    <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
    <script type="text/javascript" src="assets/js/hackathon.js"></script>
  </body>
</html>
