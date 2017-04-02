			$(function() {
				$('nav#menu').mmenu({
					extensions				: [ 'effect_slide_menu', 'shadow_page', 'shadow_panels' ],
					keyboardNavigation 		: true,
					screenReader 			: true,
					counters				: true,
					navbar 	: {
						title	: 'Menu'
					},
					navbars	: [
						{
							position	: 'top',
							content		: [ 'searchfield' ]
						}, {
							position	: 'top',
							content		: [
								'prev',
								'title',
								'close'
							]
						}
					]
				});
			});