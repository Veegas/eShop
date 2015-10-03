(function($) {
    $(function() {

        $('.button-collapse').sideNav();
        $(document).ready(function() {
            $('.modal-trigger').leanModal();
            $('.dropdown-button').dropdown();
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space

function checkPass() {
    var $pass1 = $('password');
    var $pass2 = $('password-confirm');

    if ($pass1.value == $pass2.value) {
        $pass2.removeClass('invalid');
        $pass1.removeClass('invalid');
        $pass2.addClass('valid');
        $pass1.addClass('valid');
    } else {
        $pass2.removeClass('valid');
        $pass1.removeClass('valid');
        $pass2.addClass('invalid');
        $pass1.addClass('invalid');
    }
}
