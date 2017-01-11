'use strict'
define([
	'jquery'
], function ($) {
	'use strict'

	return function (visible, hide) {
		$('#'+hide).hide();
		$('#swapper_action').click(function () {
			$('#'+hide).show();
			$('#'+visible).hide();
			window.history.pushState({hmm:'show'}, "show", '#show');

		})

		$(window).on('popstate', function(event) {
			$('#'+visible).show();
			$('#'+hide).hide();
		});
	}
})