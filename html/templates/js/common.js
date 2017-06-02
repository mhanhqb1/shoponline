$(document).ready(function(e) {
    if ($('.number').length > 0) {
        $('.number').each(function() {
            if ($(this).attr('max').length > 0) {
                if (parseFloat($(this).attr('title')) > 0) {
                    $(this).spinner({min: 1, max: parseInt($(this).attr('max')), step: 1});
                } else {
                    $(this).spinner({min: 1, step: 1});
                }
            } else {
                $(this).spinner({min: 1, step: 1});
            }
        });
    }
	
	$('.ui-spinner-button').click(function() {
		$(this).siblings('input').change();
	});
});

