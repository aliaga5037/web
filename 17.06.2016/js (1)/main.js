$(document).ready(function () {
    $("#loginForm").submit(function () {
        $('.postErrors').slideUp();
        var ur = $('input[name=username]').val();
        var ps = $('input[name=pass]').val();
        if(ur!=='' && ps!==''){
            return true;
        }else{
            $('.emptyError').slideDown();
            return false;
        }
    });
});