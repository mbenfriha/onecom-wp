(function ($, root, undefined) {

	$(function () {

		console.log('ok');
		'use strict';

		// DOM ready, take it away
		$('.selectFilter').click(function (el) {
			$('.selectFilter').removeClass('active');
			$(this).addClass('active');

			$.ajax({
				url: $(this).attr("data-ajax"),
				data: { categoryfilter: $(this).attr('id'), action: 'myfilter' }, // form data
				type: 'POST', // POST
				success: function (data) {
					console.log(data);
					$('#response').html(data); // insert data
				}
			});
			return false;
		});
	});

})(jQuery, this);
