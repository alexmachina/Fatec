Prism.plugins.NormalizeWhitespace.setDefaults({
	'remove-indent': true
});


var relatedDiv = $('.js-article-1-related');

var checkFix = function (theDiv) {

	if($(this).scrollTop() > 320 && $(this).width() > 767) {
		theDiv.css('position','fixed');
		theDiv.css('left', '65%');
		theDiv.css('top','0');

	} else {
		theDiv.css('position', 'initial');
		theDiv.css('left', 'initial');
		theDiv.css('top', 0);
	}
};

$(window).scroll(function () {
	//checkFix(relatedDiv);
});

$(window).resize(function () {
	//checkFix(relatedDiv);
});



