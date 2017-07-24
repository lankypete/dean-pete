<?php 
  $title = "dp: More";
  require_once( __DIR__ . '/header.php'); 
  require_once( dirname(__FILE__) . '/nav.php')
?>


  <div class="wrapper wrapper--narrow">
    <div class="website-projects row row--gutters">

      <div class="row__2-col-m">
        <a href="<?php home_url("more/logos.php");?>">
          <div class="website-projects__project">
            <img src="/assets/images/logo-collection.png">
            <p>Logo Design</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="<?php home_url("more/uiue.php");?>">
          <div class="website-projects__project">
            <img src="/assets/images/synth-screenshot2.png">
            <p>UI/UEx Design</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="<?php home_url("more/va.php");?>">
          <div class="website-projects__project">
            <img src="/assets/images/zebraalbumcover2.png">
            <p>Visual Art</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="http://lankypete.github.io/resume/" target="blank">
          <div class="website-projects__project">
            <img src="/assets/images/resume-screenshot.png">
            <p>Resume</p>
          </div>
        </a>
      </div>

    </div>

  </div>

<?php
  require_once( __DIR__ . '/footer.php' );
?>