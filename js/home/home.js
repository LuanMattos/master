$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();
    });
    $("#nav-user").hide();

    $("#avatar-nav").click(function(){
    $("#nav-user").slideToggle();
})

});
