(function($) {
  "use strict";

  /**
   * All of the code for your public-facing JavaScript source
   * should reside in this file.
   *
   * Note: It has been assumed you will write jQuery code here, so the
   * $ function reference has been prepared for usage within the scope
   * of this function.
   *
   * This enables you to define handlers, for when the DOM is ready:
   *
   * $(function() {
   *
   * });
   *
   * When the window is loaded:
   *
   * $( window ).load(function() {
   *
   * });
   *
   * ...and/or other possibilities.
   *
   * Ideally, it is not considered best practise to attach more than a
   * single DOM-ready or window-load handler for a particular page.
   * Although scripts in the WordPress core, Plugins and Themes may be
   * practising this, we should strive to set a better example in our own work.
   */

  const hostName = ril_object.rewrite_image_url_host_name;

  window.addEventListener("DOMContentLoaded", event => {
    window.stop();

    var imgElem = document.getElementsByTagName("img");

    for (var i = 0; i < imgElem.length; i++) {
      imgElem[i].srcset = "";
      var url = new URL(imgElem[i].src);
      url.hostname = hostName;
      imgElem[i].src = url;
    }

    //

    let regEx = /\b(https?:\/\/.*?\.[a-z]{2,4}\/[^\s]*\b)/g;

    var bgImgElem = document.getElementsByClassName("entry-thumb");

    for (var i = 0; i < bgImgElem.length; i++) {
      if (bgImgElem[i].style.backgroundImage) {
        var url = new URL(bgImgElem[i].style.backgroundImage.match(regEx)[0]);
        url.hostname = hostName;
        let test = "url(" + url.href + ")";
        bgImgElem[i].style.backgroundImage = test;
      }
    }
  });

//   window.addEventListener('scroll', function() {
// 	var imgElem = document.getElementsByTagName("img");

//     for (var i = 0; i < imgElem.length; i++) {
//       imgElem[i].srcset = "";
//       var url = new URL(imgElem[i].src);
//       url.hostname = "www.tr724.com";
//       imgElem[i].src = url;
//     }

//     //

//     let regEx = /\b(https?:\/\/.*?\.[a-z]{2,4}\/[^\s]*\b)/g;

//     var bgImgElem = document.getElementsByClassName("entry-thumb");

//     for (var i = 0; i < bgImgElem.length; i++) {
//       if (bgImgElem[i].style.backgroundImage) {
//         var url = new URL(bgImgElem[i].style.backgroundImage.match(regEx)[0]);
//         url.hostname = "www.tr724.com";
//         let test = "url(" + url.href + ")";
//         bgImgElem[i].style.backgroundImage = test;
//       }
// 	}

//   });
})(jQuery);
