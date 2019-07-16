<div class="row">
  <?php 

    $studs = [
      "Ganesh Dasari" => ['ganesh-dasari.png','General Secretary, CKPCET'],
      "Prem Popatia" => ['prem-popatia.png','Technical Secretary, CKPCET'],
      "Aditya Babaria" => ['aditya-babaria.png','Technical Coordinator'],
      "Dheeraj Mishra" => ['dheeraj-mishra.png','General Secretary, CKPIPSR'],
      "Kunal Motwani" => ['kunal-motwani.png','Technical Secretary, CKPIPSR'],
    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 <?php echo ($name == "Ganesh Dasari") ? "col-sm-offset-1" : ""; ?> col-xs-6">
    <div class="team-single-wrapper">
      <div class="team-single">
        <div class="person-thumb">
          <img src="images/team/students/<?= $img[0]; ?>" class="img-responsive" alt="<?= $name; ?>">
        </div>
      </div>
      <div class="person-info text-center">
        <h2><?= $name; ?></h2>
        <p><?= $img[1]; ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>                
</div>