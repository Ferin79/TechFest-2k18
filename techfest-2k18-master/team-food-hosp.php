<div class="row">
  <?php 

    $studs = [
      "Aditya Vashi" => ['aditya-vashi.png','Food'],
      // Add Names for hospitality
    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 <?php echo ($name == "Aditya Vashi") ? "col-sm-offset-1" : ""; ?> col-xs-6">
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