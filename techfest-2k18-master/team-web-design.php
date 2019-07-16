<div class="row">
  <?php 

    $studs = [
      "Shubham Shah" => ['shubham-shah.png','Web Committee'],
      "Hunny Jummani" => ['hunny-jummani.png','Web Committee'],
      "Vishvesh Soni" => ['vishvesh-soni.png','Application'],
      "Falgun Patel" => ['falgun-patel.png','Application'],
      "Darshan Purani" => ['darshan-purani.png','Design'],
      "Yash Lalluwadia" => ['yash-lalluwadia.png','Design'],

    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 col-xs-6">
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