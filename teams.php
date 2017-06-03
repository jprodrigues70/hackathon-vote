<?php require_once('heart/pulse.php'); ?>
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
          <div class="card" data-modal="team2">
              <h3>Equipe 2</h3>
              <ul>
                <li>Priscila Santos de Jesus- Prado-BA</li>
                <li>Maria das Graças Santos Mendes - Prado-BA</li>
                <li>Katiucia Eça - Prado-BA</li>
                <li>Gerusa Sales - Prado-BA</li>
              </ul>
          </div>
          <div class="gt-modal">
              <div id="team2" class="modal">
                  <button class="modal-close" type="button" name="button">×</button>
                  <div class="modal-header">
                      <h1>Equipe 2</h1>
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
      </div>
    </section>
    <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
    <script type="text/javascript" src="assets/js/hackathon.js"></script>
  </body>
</html>
