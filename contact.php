<div id="contact" class="section border-top scroll-magic bottom-block" data-scroll-index="5" data-scrollfunction="genericFadeIn" data-scrollvariables="theObject">
  <div class="hold-1200">
  <!--  <div class="copy-block">
      <h2 class="header">
        Contact
      </h2>

    </div>-->
<?php

function contactBlock($name,$phone,$email) {
  ?>

  <li>
    <h4 class="head-type">
      <?php echo $name;?>
    </h4>
    <div class="phone">T <?php echo $phone;?></div>
    <a  href="mailto:<?php echo $email;?>"class="email"><?php echo $email?></a>
  </li>
  <?php
}

$winickArray = array(
  array('Jeff<br/> Winick', '212.792.2601', 'jeff@winick.com'),
  array('DARRYL<br/> RUBENS', '212.792.2623', 'rubens@winick.com'),
  array('kelly<br/> gedinsky', '212.792.2637', 'kelly@winick.com'),
  array('lee<br/> block', '212.792.2649', 'lee@winick.com')
);
$newmarkArray = array(
  array('David<br/>Falk','212.372.2271','dfalk@ngkf.com'),
  array('Danny<br/>Levine','212.372.2319','dlevine@ngkf.com'),
  array('Jason <br/>Greenstein','212.372.2349','jgreenstein@ngkf.com')
);
?>

    <div id="contact-blocks" class="clearfix">
      <div class="block fade-child">
        <div class="copy-block ">
          <h2>
            winick retail specialist
          </h2>
        </div>
        <ul class="no-style">
          <?php
          foreach($winickArray as $wa) {
            contactBlock($wa[0],$wa[1],$wa[2]);
          }
          ?>
        </ul>
        <div class="logo ">
          <a href="http://winick.com" target="_blank">
            <img src="assets/imgs/winick-logo.png" />
          </a>
        </div>

      </div>
      <div class="block fade-child">
        <div class="copy-block ">
          <h2>
            newmark grubb knight frank
          </h2>
        </div>
        <ul class="no-style">
          <?php
          foreach($newmarkArray as $wa) {
            contactBlock($wa[0],$wa[1],$wa[2]);
          }
          ?>
        </ul>

        <div class="logo ">

            <img src="assets/imgs/newmark-logo.png" />

        </div>


      </div>

      <div id="bottom-logos" class="fade-child">
        <img  class=" left late-load fade-in" data-src="assets/imgs/greenoak-logo.png" />
<img  class=" left late-load fade-in" data-src="assets/imgs/capstone-logo.png" />
      </div>
    </div>


<!--
    <div id="logo-assembly">
      <img class="top late-load fade-in" data-src="assets/imgs/winick-logo.png" />
      <div class="bottom clearfix">
        <div class="container">
          <img  class=" left late-load fade-in" data-src="assets/imgs/logo-greenoak.png" />
        </div>
        <div class="container">
          <img  class=" right late-load fade-in" data-src="assets/imgs/logo-capstone.png" />
        </div>


      </div>
    </div>-->

  </div>
</div>
