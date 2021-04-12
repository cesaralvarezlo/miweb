$(function(){

	//Ajustar el menu cuando cambia de tamaño
    $(window).resize(function(){

		if($(document).width() < 800){
			$('.header-navegacion').css({'right':'-350px'});
			$('.navegacion-wrapper').css({'width':'0%', 'background':'rgba(236,240,241,.0)'});

			$('.header-menu li').removeClass('activado');
			$('#btn-menu').removeClass('icon-x').addClass('icon-menu5');
		}

		if($(document).width() > 800){
			$('.navegacion-wrapper').css({'width':'100%'});
			$('.header-navegacion').css({'right':'0px'});
		}
        
	});

	//Desplegar menu movil
	$('#btn-menu').on('click', function(e){

		e.preventDefault();

		if($('#btn-menu').attr('class') == 'icon-menu5'){

			$('.navegacion-wrapper').css({'width':'100%', 'background':'rgba(236,240,241,.5)'});

			$('#btn-menu').removeClass('icon-menu5').addClass('icon-x');
			$('.navegacion-wrapper .header-navegacion').animate({'right':'0'},'fast', 'linear');
            
		}else{

			$('.navegacion-wrapper').css({'width':'0%', 'background':'rgba(236,240,241,.0)'});

			$('#btn-menu').removeClass('icon-x').addClass('icon-menu5');
			$('.navegacion-wrapper .header-navegacion').css({'right':'-350px'});
            
		}

	});

	//Funcion del icono subir arriba
	$(window).scroll(function(){
		if($(this).scrollTop() > 300){
			$('.contenedor-ir-arriba').fadeIn(300);
		}else{
			$('.contenedor-ir-arriba').fadeOut(300);
		}
	});

	$('.contenedor-ir-arriba').click(function(event){
		event.preventDefault();
		$('html,body').animate({scrollTop: 0}, 350);
	});

	//Funcion para resaltar menu seleccionado
	var url = window.location.href; 

    $(".header-menu li a").each(function() {
        if(url == (this.href) || (url) == '') { 
            $(this).closest("a").addClass("active");
        }
	});

	//Funcion para desplazar hasta elemento
	var $root = $('html,body');
	$('.desplazar').on('click', function(){

		if($(document).width() < 800){
			$('.header-navegacion').css({'right':'-350px'});
			$('.navegacion-wrapper').css({'width':'0%', 'background':'rgba(236,240,241,.0)'});

			$('.header-menu li').removeClass('activado');
			$('#btn-menu').removeClass('icon-x').addClass('icon-menu5');
		}

		var target = this.hash;
		var $target = $(target);

		$root.stop().animate({
			'scrollTop': $target.offset().top
		},1000, 'swing', function(){
			window.location.hash = target;
		});
		return false;
	});

	//Plugin slick slider	
	$('.portada-slider').on('init', function(event, slick){
		$('.animated').addClass('activate fadeInDown');
	});	
	
	$('.portada-slider').slick({

        dots: true,
		infinite: true,
		fade: true,
		autoplay: true,
		autoplaySpeed: 4000,
		cssEase: 'linear'

	});
			
	$('.portada-slider').on('afterChange', function(event, slick, currentSlide) {
	  	$('.animated').removeClass('off');
	  	$('.animated').addClass('activate fadeInDown');
	});		

	$('.portada-slider').on('beforeChange', function(event, slick, currentSlide) {
	  	$('.animated').removeClass('activate fadeInDown');
	  	$('.animated').addClass('off');
	});

	//Plugin lazyload
    $(".lazyload").lazyload();

});