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
  theVideo.addEventListener("canplaythrough", function(){
  //  console.log('vidready');
    var vidReady = true;
  });
} else {
  isVid = false;
}

var jquerychecker = setInterval(function(){

  if (typeof jQuery != 'undefined' ) {
    console.log('jquery loaded');
    //$.getScript(siteDir+"js/main.js?v="+timestamp);
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
      if((imgLoaded === imgCount)&&(vidReady==false)) {
        endLoad();
        clearInterval(loadCheck);
        return false;
      }
    },10);
  }
  function endLoad() {
    console.log('pre loaded');
    $.getScript(siteDir+"js/main.js?v="+timestamp);
    $(document).scrollTop(0);
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
