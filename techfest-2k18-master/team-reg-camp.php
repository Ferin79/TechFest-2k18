<div class="row">
  <?php 

    $studs = [
      "Purvam Joshi" => ['purvam-joshi.png','Registration'],
      "Dimpal Thakor" => ['dimpal-thakor.png','Registration'],
      "Abhinav Patel" => ['abhinav-patel.png','Registration'],
      "Ayush Mathur" => ['ayush-mathur.png','Registration'],
      "Archit Talati" => ['archit-talati.png','Registration'],
    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 <?php echo ($name == "Purvam Joshi") ? "col-sm-offset-1" : ""; ?> col-xs-6">
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
      "Parjanya Patolawala" => ['parjanya-patolawala.png','Campaigning'],
      "Arpit Khanna" => ['arpit-khanna.png','Campaigning'],
      "Kamal Gonawala" => ['kamal-gonawala.png','Campaigning'],
      "Velsi Passwala" => ['velsi-passwala.png','Campaigning'],
      "Pooja Juneja" => ['pooja-juneja.png','Campaigning'],
    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 <?php echo ($name == "Parjanya Patolawala") ? "col-sm-offset-1" : ""; ?> col-xs-6">
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