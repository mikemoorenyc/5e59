<div id="gallery">
<div class="inner">
  <div class="back-bracket bracket">

    <div class="line"></div>
  </div>
  <div id="gallery-container" class="fade-in">
    <?php

    $slideArray = array(
      array('assets/imgs/fake-gal-1.jpg'),
      array('assets/imgs/fake-gal-2.jpg'),
      array('assets/imgs/fake-gal-3.jpg')

    );
    foreach($slideArray as $sa) {
      ?>
      <div class="slide">

        <img class="late-load" data-src="<?php echo $sa[0];?>" />
      </div>

      <?php
    }

    ?>

  </div>

  <div class="front-bracket bracket">
    <div class="line"></div>
  </div>
  
</div>
</div>
