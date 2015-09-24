<div id="intro" data-scroll-index="0">

    <?php
    if($mobileClass=="mobile") {
      ?>
      <div class="static-header">
        <div class="padding"></div>
        <div id="intro-video" class="static">
          <div class="the-img">

            <img class="hide preload" data-src="assets/imgs/video-place.jpg" />
          </div>


        </div>

      </div>


      <?php
    } else {
      ?>
      <div class="video-header">
        <div id="intro-video" class="video">
          <div class="holder">
            <video preload loop muted id="intro-vid">
<source src="https://s3.amazonaws.com/reacdn/test.mp4" type="video/mp4">

          <img class="preload" data-src="assets/imgs/video-place.jpg" />
    </video>

          </div>


        </div>


      </div>

      <?php
    }


    ?>
  <div class="hold-1200">
    <div id="intro-scroll">
      <h1>
        <span class="left-bracket bracket">

        </span>
        <span class="text">Reframe your frame of retail</span>
        <span class="right-bracket bracket">

        </span>
      </h1>

    </div>


  </div>




</div>
