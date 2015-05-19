$(document).ready(function() {
    $('#linkToggle').click(function(event) {
        event.preventDefault();
        $('dd').toggleClass('invisible');
    });

    $('ul').each(function(index, element) {
		$(this).children().first().css("font-weight", "bold");
	});

    $('li').click(function(event) {
        $(this).parent().addClass('invisible');
    });
});




