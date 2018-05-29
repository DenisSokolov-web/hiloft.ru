$(document).ready(function () {

    var $roleButton = $('.login-form__role-select');

    $roleButton.on('click', function () {
        $(this).find('.login-form__role-name').toggleClass('login-form__role-name_active');

        console.log('click')
    })

});