<section id="floorplans" class="section scroll-magic" data-scroll-index="4" data-scrollfunction="genericFadeIn" data-scrollvariables="theObject">
  <div class="hold-1200 clearfix fade-child">
    <div id="left">
      <div class="headline">
        <h2 class="head-type">
            Maximum Retail Impact
        </h2>
      </div>

      <ul id="plan-tabber" class="no-style">
        <li>
          <a class="active" href="#" data-type="floorplan">
            Ground Floorplan
          </a>
        </li>
        <li>
          <a href="#" data-type="elevation">
            Elevation Plan
          </a>
        </li>
      </ul>

      <div id="spec">
        <div class="copy-block">


        </div>

      </div>

    </div>


    <div id="spec-img">
      <img class="fp-img" src="assets/imgs/floorplan.jpg" />

    </div>

    <div class="hide" id="state-copy">
      <img class="late-load" data-src="assets/imgs/elevation-dt.png" />
      <img class="late-load" data-src="assets/imgs/elevation-mobile.png" />
      <div data-type="floorplan">
        <div class="copy">
          <h2>The Specifications</h2>

          <div class="copy">
            <ul>
              <li>  8 levels + basement</li>
              <li>Up to 40,000 SF of retail and office / showroom</li>
              <li>Fully modernized systems and building infrastructure</li>
              <li>50 feet of street frontage</li>
              <li>100 feet of vertical branding potential</li>
              <li>Penthouse with terrace </li>
            </ul>
          </div>
        </div>
        <div class="img">
          <img class="fp-img" src="assets/imgs/floorplan.jpg" />
        </div>

      </div>

      <div data-type="elevation">
        <div class="copy">
          <h2>KEY FEATURES</h2>

          <div class="copy">
            <ul>
              <li>50 Feet of Superior Street Frontage</li>
              <li>100 Feet of Vertical Branding Potential </li>
            </ul>
          </div>
        </div>
        <div class="img">
          <div class="elevation-img"></div>
        </div>

      </div>

    </div>

    <!-- DOWNLOADS -->

    <ul id="dl-list" class="no-style" data-scroll-index="6">
      <?php
      $dlList = array(
        array('Elevation<br/>Plan', 'pdfs/5E59_Elevation.pdf'),
        array('Ground<br/>FLOORPLAN', 'pdfs/5E59_GroundFloorplan.pdf'),
        array('Brochure<br/>& Images', 'pdfs/5E59_Brochure.pdf'),
        array('Top 12<br/>Highlights', 'pdfs/5E59_Highlights.pdf')
      );
      foreach($dlList as $dl) {
        ?>
        <li class="fade-child">
          <a href="<?php echo $dl[1];?>" target="_blank"
            onclick="ga('send', 'event', 'Download', 'pdf', '<?php echo $dl[1];?>');"
            >
            <span class="title"><?php echo $dl[0];?></span>
            <span class="icon">
              <svg>
                <use xlink:href="#download" />
              </svg>

            </span>

          </a>
        </li>

        <?php
      }

      ?>

    </ul>


  </div>
</section>
