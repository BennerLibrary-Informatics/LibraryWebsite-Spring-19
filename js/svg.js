//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//~~~~~~~~~~~ svg fallback ~~~~~~~~~~~~
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//This replaces any image with the class of svg with the svg alternative to the image. svg’s are vector based and render much better on devices with a high dpi.

if(Modernizr.svg) {
    $('img[src*="png"].svg').attr('src', function() {
        return $(this).attr('src').replace('.png', '.svg');
    });
}