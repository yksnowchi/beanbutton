
$(document).ready(function() {
    /*
    var defaults = {
    containerID: 'moccaUItoTop', // fading element id
    containerHoverClass: 'moccaUIhover', // fading element hover class
    scrollSpeed: 1200,
    easingType: 'linear' 
    };
    */
			
    $().UItoTop({ easingType: 'easeOutQuart' });
			
    });

    $(document).ready(function(){
      $('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body')
            .animate({scrollTop: targetOffset}, 1000);
           return false;
          }
        }
  });
});
