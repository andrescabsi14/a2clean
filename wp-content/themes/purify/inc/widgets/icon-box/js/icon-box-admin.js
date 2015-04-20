(function ($) {
	// After the form is setup, add some custom stuff.
	$(document).on('sowsetupform', '.thim-widget-form[data-class="Thim_Icon_Box_Widget"]', function () {
		var $iconboxWidgetForm = $(this);
		if (typeof $iconboxWidgetForm.data('obsetup-iconbox-widget') == 'undefined') {
			var $iconboxTypeField = $iconboxWidgetForm.find('.thim-widget-field-icon_type');
			var updateFieldsForSelectedIconType = function () {
				var selectedType = $iconboxTypeField.find('input[type="radio"][name*="icon_type"]:checked').val();
				$iconboxWidgetForm.data('selected-type', selectedType);
				if (selectedType == 'font-awesome') {
					$iconboxWidgetForm.find('.thim-widget-field-font_awesome_group').slideDown(300, 'linear');
					$iconboxWidgetForm.find('.thim-widget-field-font_image_group').hide();
					$iconboxWidgetForm.find('.thim-widget-field-font_7_stroke_group').hide();

                                }
                                else if (selectedType == 'font-7-stroke') {
					$iconboxWidgetForm.find('.thim-widget-field-font_awesome_group').hide();
					$iconboxWidgetForm.find('.thim-widget-field-font_image_group').hide();
                                        $iconboxWidgetForm.find('.thim-widget-field-font_7_stroke_group').slideDown(300, 'linear');

				}
                                else {
					$iconboxWidgetForm.find('.thim-widget-field-font_awesome_group').hide();
                                        $iconboxWidgetForm.find('.thim-widget-field-font_7_stroke_group').hide();
					$iconboxWidgetForm.find('.thim-widget-field-font_image_group').slideDown(300, 'linear');
				}
			};
			$iconboxTypeField.change(updateFieldsForSelectedIconType);
			updateFieldsForSelectedIconType();

			// link read more
			var $iconboxLinkBoxField = $iconboxWidgetForm.find('.thim-widget-field-read_more_groupread_more');
			var updateFieldsForSelectedLinkType = function () {
				var selectedLinkType = $iconboxLinkBoxField.find('select[name*="read_more"] option:selected').val();
				$iconboxWidgetForm.data('selected-type', selectedLinkType);
				if (selectedLinkType == "more") {
					$('.thim-widget-field-read_more_groupbutton_read_more_group').slideDown(300, 'linear');
				} else {
					$('.thim-widget-field-read_more_groupbutton_read_more_group').slideUp(300, 'linear');
				}
			}
			$iconboxLinkBoxField.change(updateFieldsForSelectedLinkType);
			updateFieldsForSelectedLinkType();

			// custom font heading
			var $iconboxCustomFontField = $iconboxWidgetForm.find('.thim-widget-field-title_groupfont_heading');
			var updateFieldsForSelectedCustomFontType = function () {
				var selectedCustomFontType = $iconboxCustomFontField.find('select[name*="font_heading"] option:selected').val();
				$iconboxWidgetForm.data('selected-type', selectedCustomFontType);
				if (selectedCustomFontType == "custom") {
					$('.thim-widget-field-title_groupcustom_heading').slideDown(300, 'linear');
				} else {
					$('.thim-widget-field-title_groupcustom_heading').slideUp(300, 'linear');
				}
			}
			$iconboxCustomFontField.change(updateFieldsForSelectedCustomFontType);
			updateFieldsForSelectedCustomFontType();

			// custom border
			var $iconboxborderBottomField = $iconboxWidgetForm.find('.thim-widget-field-border_groupshow_border');
			var updateFieldsForSelectedBorderBottomType = function () {
				var selectedBorderBottomType = $iconboxborderBottomField.find('select[name*="show_border"] option:selected').val();
				$iconboxWidgetForm.data('selected-type', selectedBorderBottomType);
				if (selectedBorderBottomType == "show") {
					$('.thim-widget-field-border_groupborder_bottom_color').slideDown(300, 'linear');
				} else {
					$('.thim-widget-field-border_groupborder_bottom_color').slideUp(300, 'linear');
				}
			}
			$iconboxborderBottomField.change(updateFieldsForSelectedBorderBottomType);
			updateFieldsForSelectedBorderBottomType();

			$iconboxWidgetForm.data('obsetup-iconbox-widget', true);
		}
	});

})(jQuery);