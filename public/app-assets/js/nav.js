$(document).ready(function () {
    // $(".headerHumberger").click(function() {
    //     $(".menu_nav").addClass("humbergerLeft");
    // });


    $(".headerClose").click(function () {
        $(".total_header ul").toggleClass('active');
    });

});
$(document).ready(function () {
    $('.icon_display').on('click', function (event) {
        $('.total_header ul').toggleClass('active');
    });
});