$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});

// https://stackoverflow.com/questions/16834138/javascript-function-post-and-call-php-script
// https://stackoverflow.com/questions/20738329/how-to-call-a-php-function-on-the-click-of-a-button