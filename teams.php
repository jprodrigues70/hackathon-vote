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
      <?php Session::msg(); ?>
      <h1>Equipes</h1>
      <div class="flex-box">

          <?php foreach ($teams as $key => $team): ?>
          <div class="card col" data-modal="team<?php Prints::it($team, 'id'); ?>">
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
              <div id="team<?php Prints::it($team, 'id'); ?>" class="modal">
                  <button class="modal-close" type="button" name="button">×</button>
                  <div class="modal-header">
                      <h1><?php Prints::it($team, 'name') ?></h1>
                  </div>
                  <div class="modal-body">
                      <form class="gt-form text-center" action="controllers/vote_controller" method="post">
                          <input type="hidden" name="teams_id" value="<?php Prints::it($team, 'id'); ?>">
                          <?php foreach ($criterias as $key => $criteria): ?>
                              <input type="hidden" name="criterias_id[]" value="<?php Prints::it($criteria, 'id'); ?>">
                              <label class="text-left" for="c<?php Prints::it($criteria, 'id') ?>t<?php Prints::it($team, 'id'); ?>">
                                  <h3><?php Prints::it($criteria, 'title') ?></h3>
                              </label>
                              <input data-mirror="c<?php Prints::it($criteria, 'id') ?>t<?php Prints::it($team, 'id'); ?>" type="range" name="grade[]" min="2" max="10" value="10">
                              <span id="c<?php Prints::it($criteria, 'id') ?>t<?php Prints::it($team, 'id'); ?>" class="tag info">10</span>
                          <?php endforeach; ?>
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
