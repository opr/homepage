jQuery(document).ready( function( $ ) {
    var s = skrollr.init();
    if (s.isMobile()) {
        s.destroy();
    }
});