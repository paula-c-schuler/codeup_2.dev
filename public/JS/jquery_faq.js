$(document).ready(function() {

    $('#linkToggle').click(function(event) {
        event.preventDefault();
        $('#linkToggle').siblings(function(){
        	 
    	});
    });

    $('h3').click(function(event) {
		console.log(this);
		$('h3').next().slideUp(4000);
	});
});




