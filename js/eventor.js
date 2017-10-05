//	 INPUT ANIMATION
$("input, textarea").on('keyup blur', function(){$(this).attr("value", this.value);});
if (navigator.userAgent.indexOf("Firefox") != -1){
$("textarea").on('keyup blur click', function(){
	if($(this).value==""){
		$(this).siblings('label').css({
		   'top' : '1px',
		});
	}else{
		$(this).siblings('label').css({
		   'top' : '-24px',
			'color': '#000'
		});
	}
	});
}

							
//	 VALIDATOR
$.validate({
  form : '#contactform',
	modules : 'security',
});


//HEADER CROUSEL
$('#owlhead').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
	dots: false,
	animateOut: 'fadeOut',
	autoplay: true,
	navText: ['<img src="img/arrows/previous.png">', '<img src="img/arrows/next.png">'],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1,
			nav:true,
        },
        1000:{
            items:1
        }
    }
});