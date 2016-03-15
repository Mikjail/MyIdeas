$(document).ready(function(){
/* Entry animation */
	
	$('#home').animate({
			opacity: '1'
		},
		 2000, function(){
			$('#footer').fadeIn('Fast');
			$('#middle').animate({
				width: '100%',	
			},			
			 1000,function(){
				$('.myPanel, .myPanel>img').fadeTo(2000,1);
			});

		});
//SCROLL

	$('a').click(function(){
    
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 1000);
	});


// EXPERIENCE PANEL	
	$('.exp').mouseenter(function() {
			$('.exp>img').animate({
				opacity: '0'
			},'Fast');
			$('.expFadeIn').fadeIn('Fast');

	});
	$('.exp').mouseleave(function() {
		$('.exp>img').animate({
				opacity: '1'
			},'Fast');
		$('.expFadeIn').fadeOut();
	});

//EDUCATION PANEL
	$('.std').mouseenter(function() {
			$('.std>img').animate({
				opacity: '0'
			},'Fast');
			$('.educFadeIn').fadeIn('Fast');

	});
	$('.std').mouseleave(function() {
		$('.std>img').animate({
				opacity: '1'
			},'Fast');
		$('.educFadeIn').fadeOut();
	});

//SKILL PANEL

$('.skill').mouseenter(function() {
			$('.skill>img').animate({
				opacity: '0'
			},'Fast');
			$('.skillFadeIn').fadeIn('Fast');

	});
	$('.skill').mouseleave(function() {
		$('.skill>img').animate({
				opacity: '1'
			},'Fast');
		$('.skillFadeIn').toggle();
	});
	
// Customize each one of them
   
    $('.skillProgress').animate({
		width: "100%"
	},1000);
//progress skill panel

	$('#clickProg').click(function(){
		
		$('.phpProg, .JavaProg').animate({
			width: '70%'
		},1000);

		$('.htcsProg, .jsProg').animate({
			width: '80%'
		}, 1000);

		$('.CProg').animate({
			width: '90%'
		}, 1000);

		$('.androidProg').animate({
			width: '60%'
		}, 1000);


	});
//CONTACT

	function iniMap(){
	var map = new google.maps.Map();	
	 var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 44.540, lng: -78.546},
          zoom: 8
      });
    }
});

	
