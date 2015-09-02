<div id="facts" data-scroll-index="1" class="scroll-magic" data-scrollfunction="genericFadeIn" data-scrollvariables="theObject">
  <div class="hold-1200">
  <!--  <div class="img-holder">
      <img data-src="assets/imgs/orange-5.jpg" class="late-load fade-in" />

    </div>-->

    <div class="copy-block fade-child">
      <h2>
        BUILDING
      </h2>

      <div class="copy">
        <p>
          5 East 59th Street is located directly across from the internationally renowned Apple Store, open 24/7, and believed to be the highest grossing retail store in the world. This unique offering dedicates eight newly reconstructed and highly configurable stories to the retailer who values the unrivaled contenancy and exposure of this world-class location.
        </p><p>
          50 feet of frontage across, offering unlimited branding potential, this is an unprecedented “blank canvas” opportunity and available immediately.
</p>

      </div>

    </div>

    <ul class="no-style" id="fact-list">
      <?php
      $factList = array(
        array('YEARLY GROSS <br/>REVENUE', '$4 BILLION'),
        array('ANNUAL SALES <br/>WITHIN ONE BLOCK', '$1.5 BILLION'),
        array('SUBWAY <br/>RIDERSHIP','26 MILLION' ),
        array('APPLE STORE YEARLY <br/>FOOT TRAFFIC','4.6 MILLION' ),
        array('YEARLY VISITORS <br/>TO CENTRAL PARK','40 MILLION' ),
        array('BARNEY&rsquo;S + BERGDORF <br/>+ BLOOMINGDALES','CROSSROADS' ),
        array('TOP PHOTOGRAPHED <br/>RETAIL CORNER','NO.1' )
      );
      foreach($factList as $fl) {
        ?>
        <li class="fade-child">
          <div class="header">
            <?PHP echo $fl[0];?>
          </div>
          <hr/>
          <div class="fact head-type">
            <?php echo $fl[1];?>
          </div>
        </li>

        <?php
      }

      ?>

    </ul>


  </div>
</div>
