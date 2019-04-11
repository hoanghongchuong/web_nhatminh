$(document).ready(function($){	
	var owl = $(".owl-carousel-product");
	  	owl.owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'], 
	  		autoplay:false, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 2000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:1,									            									            
		        },
		        600:{
		            items:4,          
		        },
		        1000:{
		            items:4,  
		        }
		    }
		});
	var owl = $(".owl-carousel-news");
	  	owl.owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'], 
	  		autoplay:false, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 2000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:1,									            									            
		        },
		        600:{
		            items:1,          
		        },
		        1000:{
		            items:1,  
		        }
		    }
		});  	
});

var MobileMenu = function () {
        var mobileMenu = $("#menu");

        if (mobileMenu.length) {
            mobileMenu.mmenu({
                "extensions": [
                    // "fx-panels-zoom",
                    "pagedim-black",
                    // "theme-dark"
                ],
                "offCanvas": {
                    // "position": "right"
                },
                "navbars": [
                    {
                        "position": "top",
                        "content": [
                            "<a class='fa fa-envelope' href='#/'></a>",
                            "<a class='fa fa-twitter' href='#/'></a>",
                            "<a class='fa fa-facebook' href='#/'></a>"
                        ]
                    }
                ]
            });
        }

};
