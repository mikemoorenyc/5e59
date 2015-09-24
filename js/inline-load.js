(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-68021219-1', 'auto');
ga('send', 'pageview');


siteDir = '***REPLACEWITHTHEMEDIRECTORY***';

var timestamp = '***TIMESTAMP***';

cssExpand = siteDir+"css/expanded.css?v="+timestamp;

function loadCSS(e,t,n){"use strict";function o(){var t;for(var i=0;i<s.length;i++){if(s[i].href&&s[i].href.indexOf(e)>-1){t=true}}if(t){r.media=n||"all"}else{setTimeout(o)}}var r=window.document.createElement("link");var i=t||window.document.getElementById("inline-scripts");var s=window.document.styleSheets;r.rel="stylesheet";r.href=e;r.media="only x";i.parentNode.insertBefore(r,i);o();return r}


loadCSS(cssExpand);

//VIDEO CHECK
var theVideo = document.getElementById("intro-vid");
if(theVideo) {
  var vidReady = false;
  var isVid = true;

  window.addEventListener('load', function(){
    console.log('fully loaded');
    //vidReady =true;
  });

  var VidChecker = setInterval(function(){
    console.log(theVideo.readyState);

    if(theVideo.readyState === 4) {
      vidReady = true;
      clearInterval(VidChecker);
      return false;
    }

  },10)

  /*
  function addSourceToVideo(element, src, type) {
    var source = document.createElement('source');
    source.src = src;
    source.type = type;
    element.appendChild(source);
  }

  addSourceToVideo(theVideo,"test.mp4","video/mp4");
  theVideo.addEventListener("progress", progressHandler,false);
  function progressHandler(e) {
    if( theVideo.duration ) {
        var percent = (theVideo.buffered.end(0)/theVideo.duration) * 100;
        console.log( percent );
        if( percent >= 50 ) {
            console.log("video loaded");
            theVideo.removeEventListener("progress", progressHandler,false);
            vidReady = true;
        }
        theVideo.currentTime++;
    }

  }



  theVideo.addEventListener("canplaythrough", function(){

    var vidReady = true;
  });
  */
} else {
  isVid = false;
}

var jquerychecker = setInterval(function(){

  if (typeof jQuery != 'undefined' ) {
    console.log('jquery loaded');
    //$.getScript(siteDir+"js/main.js?v="+timestamp);
    if(isVid==true) {
      $.getScript(siteDir+"js/loader.js?v="+timestamp).done(function( script, textStatus ) {
/*
        $.html5Loader({
    			filesToLoad:siteDir+"js/files.json?v="+timestamp,
          forceMediaPreload: false,
          mediaBufferSizeToPreload: 1,
    			onUpdate: function(perc){
    				console.log(perc/100);
    			},
    			stopExecution:true,
    			onComplete: function () {
    				console.log("All the assets are loaded!");
            vidReady = true;
            $('#intro-vid').append('  ');
    			}
    	   });

*/

      });
    }


    preloader();
    clearInterval(jquerychecker);
  }

}, 10);

function preloader() {
  var imgLoaded = 0;
  var imgCount = $('.preload').length;


  $('.preload').each(function(){
    var toLoad = $(this);
    $(toLoad).attr('src', $(toLoad).data('src'));
    $(toLoad).load(function(){

      imgLoaded++;
      if(!(theVideo)) {
        if(imgLoaded == imgCount) {
          //LOAD IN FOR NON-VIDEO
          endLoad();
        }
      }

    });
  });

  //LOAD IN FOR VIDEO
  if(theVideo) {
    var loadCheck = setInterval(function(){
      if((imgLoaded === imgCount)&&(vidReady==true)) {
        console.log(vidReady);
        endLoad();
        clearInterval(loadCheck);
        return false;
      }
    },10);
  }
  function endLoad() {
    console.log('pre loaded');
    $.getScript(siteDir+"js/main.js?v="+timestamp).done(function( script, textStatus ) {
    console.log( textStatus );
    });
    $(document).scrollTop(0);
    //theVideo.currentTime = 0;
    $('#preloader').fadeOut(500, function(){
      //var myVideo = document.getElementById("intro-vid");
      if(theVideo) {

        theVideo.play();
      }
      if(isVid == true) {
        vidTimer = 500;
      } else {
        vidTimer = 0
      }
      setTimeout(function(){
        $('html').addClass('__scroll-activated');
      },vidTimer);
    });

  //  clearInterval(loadCheck);
    //return false;
  }





}
