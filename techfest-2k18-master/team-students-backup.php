<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once '/inc-links.php'; ?>
    <title>Central Committee | GTU Techfest 2018</title>
</head>
<body>
    <?php require_once './inc-header.php'; ?>
    <section id="page-breadcrumb">
      <div class="vertical-center sun">
        <div class="container">
          <div class="row">
            <div class="action">
              <div class="col-sm-12">
                <h1 class="title text-center">Central Committee</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="central-team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php 
                        $posts = [
                            "GS, TS & TC" => ['gststc','team-gs-ts-tc.php'],
                            "Finance & Sponsorship" => ['finspon','team-fin-spon.php'],
                            "Web & Design" => ['webdesign','team-web-design.php'],
                            "Registration & Campaigning" => ['regcampac','team-reg-camp.php'],
                            "Transportation & Ground Committee" => ['transground','team-ground-trans.php'],
                            "Social Media, Printing & Decoration" => ['socprintdeco','team-soc-print-deco.php'],
                            "Food & Hospitality" => ['foodhosp','team-food-hosp.php'],                            
                        ];
                    ?>
                    <div id="accordion-container">
                        <div class="panel-group" id="accordion">
                            <?php
                                foreach ($posts as $post => $ref):
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title text-center">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#<?= $ref[0]; ?>">
                                            <strong><?= $post; ?></strong>
                                        </a>
                                    </h4>
                                </div>
                                <div id="<?= $ref[0]; ?>" class="panel-collapse collapse <?php echo ($post == "GS, TS & TC") ? "in" : ""; ?>">
                                    <div class="panel-body">
                                        <?php require_once $ref[1]; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div><!--/#accordion-->
                    </div><!--/#accordion-container-->
                </div>                
            </div>            
        </div>        
    </section>

 <!-- .cd-schedule -->
<?php require_once './inc-scripts.php'; ?>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
    if( !window.jQuery ) document.write('<script src="/schedule/js/jquery-3.0.0.min.js"><\/script>');
</script>
</body>
</html>