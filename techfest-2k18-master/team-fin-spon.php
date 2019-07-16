<div class="row">
  <?php 

    $studs = [
      "Harshal Patel" => ['harshal-patel.png','Finance'],
      "Yash Patel" => ['yash-patel.png','Finance'],
      "Niharika Yedire" => ['niharika-yedire.png','Sponsorship'],
      "Mihir Gujarathi" => ['mihir-gujarathi.png','Sponsorship'],
    ];

  ?>
  <?php
    foreach ($studs as $name => $img):
  ?>
  <div class="col-sm-2 <?php echo ($name == "Harshal Patel") ? "col-sm-offset-2" : ""; ?> col-xs-6">
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