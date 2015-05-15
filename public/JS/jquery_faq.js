$('document').ready(function() {
    // $('dd').css("display", "none");
    $('#linkToggle').click(function(event) {
        event.preventDefault();
        $('dd').toggleClass('invisible');
    });
});
