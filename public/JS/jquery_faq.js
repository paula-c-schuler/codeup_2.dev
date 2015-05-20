$(document).ready(function() {
    $('#linkToggle').click(function(event) {
        event.preventDefault();
        alert("DOM loaded.");
        $('dd').slideDown(2000);         
    });

    $('h3').click(function(event) {
		console.log(this);
		$('h3').next().slideUp(4000);
	});
});




