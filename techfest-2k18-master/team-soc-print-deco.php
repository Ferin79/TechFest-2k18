<div class="row">
  <?php 

    $studs = [
      "Bhargav Jariwala" => ['bhargav-jariwala.png','Social Media Promo'],
      "Jay Patel" => ['jay-patel.png','Social Media Promo'],
      "Manthan Solanki" => ['manthan-solanki.png','Souvenir'],
      "Neelu Kalani" => ['neelu-kalani.png','Souvenir'],
      "Raj Patel" => ['raj-patel.png','Print'],
    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 <?php echo ($name == "Bhargav Jariwala") ? "col-sm-offset-1" : ""; ?> col-xs-6">
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
<div class="row">
  <?php 

    $studs = [
      "Moxit Chauhan" => ['moxit-chauhan.png','Print'],
      "Yash Bhatia" => ['yash-bhatia.png','Decoration'],
      "Gautami Kharwar" => ['gautami-kharwar.png','Decoration'],
      "Parth Patel" => ['parth-patel.png','Decoration'],
    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 <?php echo ($name == "Moxit Chauhan") ? "col-sm-offset-2" : ""; ?> col-xs-6">
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