<section id="gallery" class="scroll-magic" data-scrollfunction="galleryFade">
<div class="inner">
  <div class="back-bracket bracket">

    <div class="line"></div>
  </div>
  <div id="gallery-container" class="fade-in clearfix">
    <?php

    $slideArray = array(
      array('assets/imgs/gal-1.jpg'),
      array('assets/imgs/gal-2.jpg'),
      array('assets/imgs/gal-3.jpg'),
      array('assets/imgs/gal-4.jpg'),
      array('assets/imgs/gal-5.jpg'),
      array('assets/imgs/gal-6.jpg'),
      array('assets/imgs/gal-7.jpg'),

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
</section>
