(function ($) {
	// After the form is setup, add some custom stuff.
	$(document).on('sowsetupform', '.thim-widget-form[data-class="Thim_Heading_Widget"]', function () {
		var $headingWidgetForm = $(this);
		if (typeof $headingWidgetForm.data('obsetup-heding-widget') == 'undefined') {
 			// custom font heading
			var $headingCustomFontField = $headingWidgetForm.find('.thim-widget-field-font_heading');
			var updateFieldsForSelectedCustomFontHeadingType = function () {
				var selectedCustomFontType = $headingCustomFontField.find('select[name*="font_heading"] option:selected').val();
				$headingWidgetForm.data('selected-type', selectedCustomFontType);
				if (selectedCustomFontType == "custom") {
					$('.thim-widget-field-custom_font_heading').slideDown(300, 'linear');
				} else {
					$('.thim-widget-field-custom_font_heading').slideUp(300, 'linear');
				}
			}
			$headingCustomFontField.change(updateFieldsForSelectedCustomFontHeadingType);
			updateFieldsForSelectedCustomFontHeadingType();

			$headingWidgetForm.data('obsetup-heading-widget', true);
		}
	});

})(jQuery);