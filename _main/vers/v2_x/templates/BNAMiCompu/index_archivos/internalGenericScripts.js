
//Agrego el class de las internas al body
$( document ).ready(function() {
    $("body").addClass("interna");
});


//Menu left fijo
    
$(document).ready(function(){
	
	
				$(window).scroll(function () {
				if ($(this).scrollTop() > 270) {
					$('.menuLateral').addClass("fixed");
					
				} else {
					$('.menuLateral').removeClass("fixed");
				}

  
			});

	
});

$(function() {
    $.fn.scrollBottom = function() {
        return $(document).height() - this.scrollTop() - this.height();
    };

    var $el = $('.menuLateral');
    var $window = $(window);

    $window.bind("scroll", function() {
        var gap = $window.height() - $el.height() - 70;
        var visibleFoot = 500 - $window.scrollBottom(); // el valor del footer para que se active
        var scrollTop = $window.scrollTop();
        
        if(scrollTop < 352 - 70){
            $el.css({
                top: (352 - scrollTop) + "px",
                bottom: "auto"
            });
        }else if (visibleFoot > gap) {
            $el.css({
                top: "auto",
                bottom: visibleFoot + "px"
            });
        } else {
            $el.css({
                top: 70,
                bottom: "auto"
            });
        }
    });
});


    