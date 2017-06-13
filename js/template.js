
$(function() {
    $('#nav > li').click(function(e) { // limit click to children of mainmenu
        var $el = $('li',this); // element to toggle
        $('#nav > li').not($el).slideUp(); // slide up other elements
        $el.stop(true, true).slideToggle(400); // toggle element
        return false;
    });
    $('#nav > li').click(function(e) {
        e.stopPropagation();  // stop events from bubbling from sub menu clicks
    });
});

// kleur on active menu
$(function() {
        $('.menu li a').click(function() {
           $('.menu li').removeClass();
           $($(this).attr('href')).addClass('active');
        });
     });  

// Fix hide dropdown
if (typeof MooTools != 'undefined') {
	var mHide = Element.prototype.hide;
	Element.implement({
		hide: function() {
				if (this.hasClass("deeper")) {
					return this;
				}
				mHide.apply(this, arguments);
			}
	});
}

// grab an element
var myElement = document.querySelector("header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init();
		// Fix hide dropdown
		$('.dropdown-menu input, .dropdown-menu label').click(function(e) {
			e.stopPropagation();
		});
		// Tooltip
		$('.tooltip').tooltip({
			html: true
		});
		// To top
		var offset = 220;
		var duration = 500;
		$(window).scroll(function() {
			if ($(this).scrollTop() > offset) {
				$('.back-to-top').fadeIn(duration);
			} else {
				$('.back-to-top').fadeOut(duration);
			}
		});
		$('.back-to-top').click(function(event) {
			event.preventDefault();
			$('html, body').animate({scrollTop: 0}, duration);
			return false;
		});
        
	});
    
})(jQuery);
