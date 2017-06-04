<?php $contexts = ['team', 'competitor', 'vote']; ?>
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
      <h1>Critérios</h1>
      <div class="content-align">
          <?php foreach ($criterias as $key => $criteria): ?>
          <div class="full">
              <h3><?php Prints::it($criteria, 'title') ?></h3>

              <p><?php Prints::it($criteria, 'description') ?></p>

              <!-- <span class="btn success" data-modal="criteria<?php //Prints::it($criteria, 'id'); ?>">Votar</span> -->
          </div>
          <div class="gt-modal">
              <div id="criteria<?php Prints::it($criteria, 'id'); ?>" class="modal">
                  <button class="modal-close" type="button" name="button">×</button>
                  <div class="modal-header">
                      <h1><?php Prints::it($criteria, 'title') ?></h1>
                  </div>
                  <div class="modal-body">
                      <form class="gt-form text-center" action="controllers/vote_controller" method="post">
                          <input type="hidden" name="criterias_id" value="<?php Prints::it($criteria, 'id'); ?>">
                          <?php foreach ($teams as $key => $team): ?>
                              <?php $voted = $vote->selectIt(['teams_id' => $team->id, 'users_id' => $_SESSION['id'], 'criterias_id' => $criteria->id], 'id ASC', '1'); ?>
                                  <label class="text-left" for="c<?php Prints::it($criteria, 'id');?>t<?php Prints::it($team, 'id'); ?>"><?php Prints::it($team, 'name') ?></label>
                              <?php if (empty($voted)): ?>
                                  <input type="hidden" name="teams_id[]" value="<?php Prints::it($team, 'id'); ?>">
                                  <input data-mirror="c<?php Prints::it($criteria, 'id');?>t<?php Prints::it($team, 'id'); ?>" type="range" name="grade[]" min="2" max="10" value="10">
                                  <span id="c<?php Prints::it($criteria, 'id');?>t<?php Prints::it($team, 'id'); ?>" class="tag info">10</span>
                              <?php else: ?>
                                  <div class="msg danger">
                                    Você já votou nessa equipe! :D
                                  </div>
                              <?php endif; ?>
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
