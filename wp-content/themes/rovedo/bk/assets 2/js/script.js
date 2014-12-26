/**
 * Script padrão
 *
 * Neste arquivos você irá encontrar todos os scripts que controlam o comportamento
 * da aplicação, assim como plugins e dependências.
*
 */

/*! Browser */
(function(d){var b=navigator.userAgent.toLowerCase(),c=b.indexOf("macintosh")!==-1?"macintosh":b.indexOf("windows")!==-1?"windows":b.indexOf("linux")!==-1?"linux":undefined,a=/(chrome)(?:.*chrome)?[ \/]([\w.]+)/.exec(b)||/(safari)(?:.*version)?[ \/]([\w.]+)/.exec(b)||/(opera)(?:.*version)?[ \/]([\w.]+)/.exec(b)||/(ie) ([\w.]+)/.exec(b)||!/compatible/.test(b)&&/(firefox)(?:.*firefox)?[ \/]([\w.]+)/.exec(b)||[];d("html").addClass(a[1]+" "+a[1]+parseInt(a[2],10)+" "+c+" "+navigator.platform);})(jQuery);

$(document).ready( function(){
    "use strict";


});


    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 400
      });

    });

    $(document).ready(function() {
    /*
     *  Simple image gallery. Uses default settings
     */

    $('.fancybox').fancybox();


    /*
     *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
    */
    $('.fancybox-media')
      .attr('rel', 'media-gallery')
      .fancybox({
        openEffect : 'none',
        closeEffect : 'none',
        prevEffect : 'none',
        nextEffect : 'none',

        arrows : false,
        helpers : {
          media : {},
          buttons : {}
        }
      });

  });