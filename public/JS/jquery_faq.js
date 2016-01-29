$(document).ready(function() {
    "use strict";

    // $('#linkToggle').click(function(event) {
    //     event.preventDefault();
    //     $('#linkToggle').siblings(function(){
        	 
    // 	});
    // });

    // Make first li under each ul bold
    $("ul li:first-child")
        .css({"font-weight": "bold"})


    //Make parent of clicked li tag invisible
    $("li").click(function(){
        console.log(this);
        
        var h3Tag = ($(this).parent().siblings("h3"));
        console.log(h3Tag);
        h3Tag.addClass("invisible");
    });


    $('h3').click(function(event) {
		console.log(this);
		$('h3').next().slideUp(4000);
	});
});




