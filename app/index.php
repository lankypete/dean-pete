<?php 
  $title = "dp: Websites";
  require_once( __DIR__ . '/header.php'); 
  require_once( dirname(__FILE__) . '/nav.php')
?>


  <div class="wrapper wrapper--narrow">
    <div class="website-projects row row--gutters">

      <div class="row__2-col-m">
        <a href="http://localhost:3000/websites/ifbr.php">
          <div class="website-projects__project">
            <img src="/assets/images/ifbr.png">
            <p class="smaller">islandfishingboatrentals.ca</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="<?php home_url("websites/pp.php");?>">
          <div class="website-projects__project">
            <img src="/assets/images/pp.png">
            <p>peteprogr.zone</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="<?php home_url("websites/um.php");?>">
          <div class="website-projects__project">
            <img src="/assets/images/underscor.png">
            <p>underscormusic.com</p>
          </div>
        </a>
      </div>

      <div class="row__2-col-m">
        <a href="#">
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





