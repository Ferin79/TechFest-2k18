<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Techfest | GTU Techfest 2018</title>
    <?php require_once 'inc-links.php'; ?>
  </head><!--/head-->

  <body>
    <?php require_once 'inc-header.php'; ?>
    <!--/#header-->

    <section id="page-breadcrumb">
      <div class="vertical-center sun">
        <div class="container">
          <div class="row">
            <div class="action">
              <div class="col-sm-12">
                <h1 class="title">About Techfest</h1>
                <p>Prarambh to Inspire</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <p>Experience is a master key to success. Looking at the pons and cons, of the past, we are about to built a new and ever improving foundation of "INSPIRE".</p>
            <p>We cannot just blindly aim and target the Dart, In order to have a perfect aim; we always need to know the GAME with an experience.Now before starting this game, we shall look back at the footprints.</p>
            <p>
              It was during 2006 that the one department hosted a techfest "PRARAMBH".
              Inspired by its success, we went steps further to organize first inter-branch techfest "UDBHAV 07" where the response was very good.
              It was in 2008 a joint venture of faculty & students dared for a state level techfest "PRARAMBH 08". The break through entries and tremendous appreciation made the event a huge success.
            </p>
            <p>
              Making the future felt at this stage of life was all the idea behind making this event.
              So we started the journey of INSPIRE and joined the league of prestigious institutes by organizing a national level technical event for students in the year 2009. 
              For 8 years between 2009 to 2016, every year INSPIRE achived new heights in terms of participation of students.
            </p>
            <p>
              Since last year, with the support of faculty and students, we hosted zonal level techfest for GTU. Again we did well and hosted record breaking participants from varius colleges in Zone-5.
              This year we are glad to organize 2nd zonal level techfest, in coordination with SCET, Surat.
              And we are sure that this event will scale new heights. Because we work with principle, Go out there, give it your best shot and then leave the rest to the Almighty.
            </p>
          </div>
          <div class="col-sm-7">
            <div id="carousel-container">
              <h2 class="page-header">Road to Inspire</h2>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators visible-xs">
                  <?php for ($i = 0; $i < 10; $i++): ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?= $i; ?>"></li>
                  <?php endfor; ?>
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <?php
                  // $techfests = [
                  //     "2008" => ['techfest-08.png', 'Prajalp, Prakruti, Prabodh, Pravrudh, Prayaksh', '#FFF'],
                  //     "2009" => ['techfest-09.png', 'Instinct, Inspirit, Integration, Innovation, Inscribe', '#FFF'],
                  //     "2010" => ['techfest-10.png', 'Break out the Ordinary', '#FFF'],
                  //     "2011" => ['techfest-11.png', 'Join the Revolution', '#000'],
                  //     "2012" => ['techfest-12.png', 'Create, Learn, Innovate', '#000'],
                  //     "2013" => ['techfest-13.png', 'Back to the Roots', '#000'],
                  //     "2015" => ['techfest-15.png', 'Idea, Create, Innovate', '#FFF'],
                  //     "2017" => ['techfest-17.png', 'GTU Zonal Level Techfest', '#000'],
                  // ];
                  $techfests = [
                      "2008" => ['techfest-08.png'],
                      "2009" => ['techfest-09.png'],
                      "2010" => ['techfest-10.png'],
                      "2011" => ['techfest-11.png'],
                      "2012" => ['techfest-12.png'],
                      "2013" => ['techfest-13.png'],
                      "2015" => ['techfest-15.png'],
                      "2017" => ['techfest-17.png'],
                  ];
                  foreach ($techfests as $year => $info):
                    ?>
                    <div class="item <?php echo ($year == "2008") ? "active" : ""; ?>">
                      <img src="images/site/<?= $info[0]; ?>" class="img-responsive" alt="">
                      
                    </div>
                  <?php endforeach; ?>
                </div>
                <a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div><!--/#carousel-example-generic-->
            </div><!--/#carousel-container-->
          </div>
        </div>
      </div>
    </section>

    <section id="shortcodes">
      <div class="container">
      </div>
    </section>

    <?php require_once 'inc-footer.php'; ?>
    <!--/#footer-->

    <?php require_once 'inc-scripts.php'; ?>  

  </body>

</html>
