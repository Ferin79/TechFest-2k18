<div class="row">
  <?php 

    $studs = [
      "Daxal Kholwadwala" => ['daxal-kholwadwala.png','Transporation'],
      "Deval Chotaliya" => ['deval-chotaliya.png','Transporation'],
      "Ashish Pokal" => ['ashish-pokal.png','Ground'],
      "Prasant Movaliya" => ['prasant-movaliya.png','Ground'],
    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 <?php echo ($name == "Daxal Kholwadwala") ? "col-sm-offset-2" : ""; ?> col-xs-6">
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