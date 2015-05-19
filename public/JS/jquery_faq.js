$(document).ready(function() {
    $('#linkToggle').click(function(event) {
        event.preventDefault();
        $('dd').toggle();         
    });

    $('ul').each(function(index, element) {
		$(this).children().first().css("font-weight", "bold");
	});

    $('li').click(function(event) {
        $(this).parent().hide();
    });
});




