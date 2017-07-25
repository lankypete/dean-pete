<?php 
  $title = "dp: More";
  require_once( __DIR__ . '/header.php'); 
  require_once( dirname(__FILE__) . '/nav.php')
?>


  <div class="wrapper wrapper--narrow">
    <div class="website-projects row row--gutters">

      <div class="row__2-col-m">
        <a href="<?php home_url("more/logos.php");?>">
          <p class="website-projects__mobile-name">Logo Design</p>
          <div class="website-projects__project">
            <img src="/assets/images/logo-collection-opt.jpg">
            <p>Logo Design</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="<?php home_url("more/uiue.php");?>">
          <p class="website-projects__mobile-name">UI/UEx Design</p>
          <div class="website-projects__project">
            <img src="/assets/images/synth-screenshot2-opt.jpg">
            <p>UI/UEx Design</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="<?php home_url("more/va.php");?>">
          <p class="website-projects__mobile-name">Visual Art</p>
          <div class="website-projects__project">
            <img src="/assets/images/zebraAlbumCover2-opt.jpg">
            <p>Visual Art</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="http://lankypete.github.io/resume/" target="blank">
        <p class="website-projects__mobile-name">Resume</p>
          <div class="website-projects__project">
            <img src="/assets/images/resume-screenshot-opt.jpg">
            <p>Resume</p>
          </div>
        </a>
      </div>

    </div>

  </div>

<?php
  require_once( __DIR__ . '/footer.php' );
?>