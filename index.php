<?php $contexts = ['team', 'criteria', 'competitor']; ?>
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
    <section class="result-box">
        <div id="start" class="text-center">
            <img class="brand" src="assets/img/marca.png" alt="">
            <div class="">
                <?php if (sizeof($short_results) < 3): ?>
                    <button type="button" name="button" class="btn info">COMPUTANDO...</button>
                <?php else: ?>
                    <button data-next="team0" type="button" name="button" class="btn success">RESULTADO &gt&gt</button>
                <?php endif; ?>
            </div>
        </div>
        <?php foreach ($short_results as $key => $result): ?>
            <?php $next = $key + 1; $previous = $key - 1 ?>
            <div class="hidden" id="team<?php echo $key ?>">
                <div class="content-align ranking">
                    <img src="assets/img/minilogo.png" alt="Lâmpada" <?php $tm->getMedal($key, true); ?>>
                    <h1><?php if ($key === 1) echo '2'; else echo ($key > 1)? '1' : '3'; ?>º Lugar</h1>
                </div>
                <div>
                    <h2>
                        <?php Prints::it($result, 'name'); ?>
                    </h2>
                    <?php if ($key < 3): ?>
                        <div class="bar" data-percentage="<?php echo (($result->result*10/$criteria_size)); ?>%" data-color="success" data-tooltip="<?php Prints::it($result, 'result') ;?> pts" data-text="<?php Prints::it($result, 'result') ;?> pts"></div>
                    <?php endif; ?>
                </div>
                <div>
                    <ul>
                        <?php foreach ($competitors as $key => $competitor): ?>
                            <?php if ($result->id == $competitor->teams_id): ?>
                                <li><?php Prints::it($competitor, 'name') ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="text-center">
                    <button class="btn info" type="button" name="button" data-previous="team<?php echo ($previous) ?>">&lt&lt</button>
                    <button class="btn success"type="button" name="button" data-next="team<?php echo ($next) ?>">&gt&gt</button>
                </div>
            </div>
        <?php endforeach; ?>
        </tbody>
      </table>
    </section>
    <?php include_once('includes/_footer.inc') ?>
    <script type="text/javascript" src="bower_components/gaintime/js/gaintime.min.js"></script>
    <script type="text/javascript" src="assets/js/hackathon.js"></script>
    <script type="text/javascript">
        nexts = [].slice.call(document.querySelectorAll("[data-next]"));
        previous = [].slice.call(document.querySelectorAll("[data-previous]"));
        nexts.forEach(function(e) {
            switcher(e, 'next');
        });
        previous.forEach(function(e) {
            switcher(e, 'previous');
        });
        function switcher(e, i) {
            e.addEventListener("click", function(a) {
                var sw = document.getElementById(e.dataset[i]);
                e.parentElement.parentElement.setAttribute("class", "hidden");
                if (sw) {
                    sw.setAttribute("class", "visible")
                } else {
                    document.getElementById("start").setAttribute("class", "text-center")
                }
            });
        }

    </script>
  </body>
</html>
