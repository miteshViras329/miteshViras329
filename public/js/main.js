$(document).ready(function () {
    $(document).on('click', '#hamburger', function () {
        $('#showHamburger').slideToggle(300);
    });

    $(document).on('click', '#cart', function () {
        $('#showCart').slideToggle('fast');
    });
});
