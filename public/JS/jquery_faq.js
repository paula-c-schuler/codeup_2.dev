// $('document').ready(function() {
//     // $('dd').css("display", "none");
//     $('#linkToggle').click(function(event) {
//         event.preventDefault();
//         $('dd').toggleClass('invisible');
//     });
// });


$('ul').each(function(index, element) {
	// console.log(this);
	$(this).children().first().css("font-weight", "bold");
	// console.log($('ul').children().first());
});

$('document').ready(function() {

    $('li').click(function(event) {
        event.preventDefault();

        $('ul').addClass('invisible');
    });
});

