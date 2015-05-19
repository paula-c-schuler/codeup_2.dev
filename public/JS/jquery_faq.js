$(document).ready(function() {
    $('#linkToggle').click(function(event) {
        event.preventDefault();
        $('dd').fadeOut(2000);         
    });

    $('h3').click(function(event) {
		console.log(this);
		$('h3').next().fadeToggle(4000);
	});

    $('li').click(function(event) {
        $(this).parent().hide();
    });
});




