<?php 
  $title = "dp: Websites";
  require_once( __DIR__ . '/header.php'); 
  require_once( dirname(__FILE__) . '/nav.php')
?>


  <div class="wrapper wrapper--narrow">
    <div class="website-projects row row--gutters">

      <div class="row__2-col-m">
        <a href="http://localhost:3000/websites/ifbr.php">
          <p class="website-projects__mobile-name">islandfishingboatrentals.ca</p>
          <div class="website-projects__project">
            <img src="/assets/images/ifbr-opt.jpg">
            <p>islandfishingboatrentals.ca</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="<?php home_url("websites/pp.php");?>">
          <p class="website-projects__mobile-name">peteprogr.zone</p>
          <div class="website-projects__project">
            <img src="/assets/images/pp-opt.jpg">
            <p>peteprogr.zone</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="<?php home_url("websites/um.php");?>">
          <p class="website-projects__mobile-name">underscormusic.com</p>
          <div class="website-projects__project">
            <img src="/assets/images/underscor-opt.jpg">
            <p>underscormusic.com</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="#">
          <p class="website-projects__mobile-name">Coming Soon</p>
          <div class="website-projects__project website-projects__project--coming-soon">
            <p>Coming Soon</p>
          </div>
        </a>
      </div>
    </div>
  </div>

<?php
  require_once( __DIR__ . '/footer.php' );
?>





