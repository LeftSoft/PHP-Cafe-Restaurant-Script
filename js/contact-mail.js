jQuery(function($){

var PASTA = window.PASTA || {};

/* ==================================================
	Reservation Form Validations
================================================== */
	PASTA.ReservationForm = function(){
		$('.reservation-form').each(function(){
			var formInstance = $(this);
			formInstance.submit(function(){

			var action = $(this).attr('action');

			$("#rv-message").slideUp(750,function() {
			$('#rv-message').hide();

			$('#rv-submit')
				.after('<img src="images/ajax-loader-bg.gif" class="loader" />')
				.attr('disabled','disabled');

			$.post(action, {
				name: $('#rv-name').val(),
				email: $('#rv-email').val(),
				phone: $('#rv-phone').val(),
				guests: $('#rv-guests').val(),
				date: $('#rv-date').val(),
				time: $('#rv-time').val()
			},
				function(data){
					document.getElementById('rv-message').innerHTML = data;
					$('#rv-message').slideDown('slow');
					$('.reservation-form img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#rv-submit').removeAttr('disabled');
					if(data.match('success') != null) $('.reservation-form').slideUp('slow');

				}
			);
			});
			return false;
		});
		});
	}

/* ==================================================
	Contact Form Validations
================================================== */
	PASTA.ContactForm = function(){
		$('.contact-form').each(function(){
			var formInstance = $(this);
			formInstance.submit(function(){

			var action = $(this).attr('action');

			$("#message").slideUp(750,function() {
			$('#message').hide();

			$('#submit')
				.after('<img src="images/ajax-loader-bg.gif" class="loader" />')
				.attr('disabled','disabled');

			$.post(action, {
				name: $('#name').val(),
				email: $('#email').val(),
				phone: $('#phone').val(),
				comments: $('#comments').val()
			},
				function(data){
					document.getElementById('message').innerHTML = data;
					$('#message').slideDown('slow');
					$('.contact-form img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#submit').removeAttr('disabled');
					if(data.match('success') != null) $('.contact-form').slideUp('slow');

				}
			);
			});
			return false;
		});
		});
	}

/* ==================================================
	Newsletter Form Validations
================================================== */
	PASTA.Newsletter = function(){
		$('.newsletter-form').each(function(){
			var formInstance = $(this);
			formInstance.submit(function(){

			var action = $(this).attr('action');

			$("#nl-message").slideUp(750,function() {
			$('#nl-message').hide();

			$('#nl-submit')
				.after('<img src="images/ajax-loader-bg.gif" class="loader" />')
				.attr('disabled','disabled');

			$.post(action, {
				email: $('#nl-email').val()
			},
				function(data){
					document.getElementById('nl-message').innerHTML = data;
					$('#nl-message').slideDown('slow');
					$('.newsletter-form img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#nl-submit').removeAttr('disabled');
					if(data.match('success') != null) $('.newsletter-form').slideUp('slow');

				}
			);
			});
			return false;
		});
		});
	}

  /* ==================================================
   Init Functions
================================================== */
$(document).ready(function(){
	PASTA.ReservationForm();
	PASTA.ContactForm();
	PASTA.Newsletter();
});

	});
