$(function() {
	'use strict';

	var $field = $('.form-control').closest('.form-group');
	if($('.form-control').val() > 0){
		$field.addClass('field--not-empty');
	}

  $('.form-control').on('input', function() {
	  var $field = $(this).closest('.form-group');
	  if (this.value) {
	    $field.addClass('field--not-empty');
	  } else {
	    $field.removeClass('field--not-empty');
	  }
	});


		$('#check').click(function() {
		  if ($('.passw').attr('type') == 'text') {
			$('.passw').attr('type', 'password');
		  } else {
			$('.passw').attr('type', 'text');
		  }
		});
	

});