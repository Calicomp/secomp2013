jQuery(document).ready(function($) {
	if (($('.col3 nav li').length > 1) && (!jQuery(".col.col3.bookblock-nav").is(":hidden"))) {
		$('.col3 nav li:eq(0)').addClass('active');
		var colunas = jQuery(".col3 a");
		bb = $('#bb-bookblock').bookblock({
			perspective: 1500,
			speed: 600,
			shadowSides: 0.5,
			shadowFlip: 0.5,
			autoplay: true,
			interval:5000,
			onEndFlip: function(page, isLimit) {
				var actualPage = page + 1;
				colunas.parent().removeClass("active");
				if (isLimit) {
					colunas.eq(actualPage).parent().addClass("active");
				} else {
					colunas.eq(0).parent().addClass("active");
				}
			}
		});
		var elements = document.querySelectorAll(".col3 a");
		for (var i = 0; i < elements.length; i++) {
			elements[i].onclick = function() {
				var allElements = document.querySelectorAll(".col3 a");
				for (var i = 0; i < allElements.length; i++) {
					if (this === allElements[i]) {
						bb.jump(i + 1);
						jQuery(this).parent().addClass("active");
					} else {
						jQuery(allElements[i]).parent().removeClass('active');
					}
				}
				return false;
			};
		}
	}
});