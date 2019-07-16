<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once './inc-links.php'; ?>
    <title>Schedule Day 2 | GTU Techfest 2018</title>
</head>
<body>
    <?php require_once './inc-header.php'; ?>
    <section id="page-breadcrumb">
      <div class="vertical-center sun">
        <div class="container">
          <div class="row">
            <div class="action">
              <div class="col-sm-12">
                <h1 class="title text-center">Schedule</h1>
                <p class="text-center">Day 2</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="schedule-day-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php 
                        $depts = [
                            "Computer" => ['#computer','sch-dept-computer2.php'],
                            "Electrical | EC" => ['#elec','sch-dept-elec2.php'],
                            "Robotics&nbsp;(GTU)" => ['#robotics','sch-dept-robotics2.php'],
                            "Applied Science" => ['#applied','sch-dept-applied2.php'],
                            "Civil" => ['#civil','sch-dept-civil2.php'],
                            "Mechanical&nbsp;(GTU)" => ['#mech','sch-dept-mech2.php'],
                            "Pharmacy&nbsp;(GTU)" => ['#phar','sch-dept-pharmacy2.php'],
                        ];
                    ?>
                    <ul class="nav nav-tabs">
                        <?php
                            foreach ($depts as $dept => $ref):
                        ?>
                        <li <?php echo ($dept == "Computer") ? "class='active in'" : ""; ?>>
                            <a data-toggle="tab" href="<?= $ref[0]; ?>" class="date"><?= $dept; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        <?php require_once 'sch-dept-computer2.php'; ?>
                        <?php require_once 'sch-dept-elec2.php'; ?>
                        <?php require_once 'sch-dept-robotics2.php'; ?>
                        <?php require_once 'sch-dept-applied2.php'; ?>
                        <?php require_once 'sch-dept-civil2.php'; ?>
                        <?php require_once 'sch-dept-mech2.php'; ?>
                        <?php require_once 'sch-dept-pharmacy2.php'; ?>
                    </div>                    
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