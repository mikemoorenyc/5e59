<section id="facts" data-scroll-index="1" class="scroll-magic" data-scrollfunction="genericFadeIn" data-scrollvariables="theObject">
  <div class="hold-1200">
  <!--  <div class="img-holder">
      <img data-src="assets/imgs/orange-5.jpg" class="late-load fade-in" />

    </div>-->

    <div class="copy-block fade-child">
      <h2>
        THE BUILDING
      </h2>

      <div class="copy">
        <p>
          5 East 59th Street sits in the heart of the Plaza District,
NYC’s preeminent shopping and commercial neighborhood, and is located directly across from the iconic Apple cube,
believed to be the highest grossing retail store in the world. 
</p>
<p>
This unique offering dedicates eight newly reconstructed
and highly configurable stories to the tenant who values the unrivaled co-tenancy and exposure of this world-class location.
</p><p>With 50 feet of frontage across 100 vertical feet, offering unlimited branding potential, this is an unprecedented “blank canvas” opportunity and available immediately.
        </p>
      </div>

    </div>

    <ul class="no-style" id="fact-list">
      <?php
      $factList = array(
        //array('YEARLY GROSS <br/>REVENUE', '$4 BILLION'),
        array('ANNUAL RETAIL SALES<br/> WITHIN ONE BLOCK', '$1.5 BILLION'),
        array('APPLE STORE YEARLY<br/> FOOT TRAFFIC','4.6 MILLION' ),
        array('Nearby Annual<br/> SUBWAY RIDERSHIP','26 MILLION' ),
        array('CENTRAL PARK Proximity,<br/> YEARLY VISITORS','40 MILLION' ),
        array('BARNEYS + BERGDORF<br/> + BLOOMINGDALE&rsquo;S','CROSSROADS' ),
        array('TOP PHOTOGRAPHED RETAIL<br/> LOCATION WORLDWIDE','#1' )
      );
      foreach($factList as $fl) {
        ?>
        <li class="fade-child">
          <div class="header">
            <?PHP echo $fl[0];?>
          </div>
          <!--<hr/> -->
          <div class="fact head-type">
            <?php echo $fl[1];?>
          </div>
        </li>

        <?php
      }

      ?>

    </ul>


  </div>
</section>
