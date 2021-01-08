$(document).ready(function(){

$.ajax({
    method : "POST",
    url : "./action.php",
    data : '&action=checkCookie',
    success : function(result) {
        var data = JSON.parse(result);
        $('#mail').val(data.mail);
        $('#pass').val(data.pass);
    }
});

// Sign Up new user

$('#fullName').keyup(function(event){
    var text = $(this).val();
    $(this).val(text.replace(/^(.)|\s(.)/g,
        function($1){
            return $1.toUpperCase();
        }));
});

$('#fullName').on("input", function(){
    var regexp = /[^a-zA-Z]/g;
    if($(this).val().match(regexp)){
        $(this).val( $(this).val().replace(regexp,'') );
    }
});
$("#sign-up-form").submit(function(e){
    e.preventDefault();
    $.ajax({
        method : "POST",
        url : "./action.php",
        data : $("#sign-up-form").serialize() + '&action=register',
        success : function(data) {
            if (data == "success") {
                swal("Success!!!", "Your Account has been registered", "success");
                $("#sign-up-form")[0].reset();
            }else{
                swal("Sorry!!!", data, "error");
            }
        }
    });
});
// Sign In user
$("#sign-in-form").submit(function(e){
    e.preventDefault();
    $.ajax({
        method : "POST",
        url : "./action.php",
        data : $("#sign-in-form").serialize() + '&action=login',
        success : function(data) {
            if (data == "success") {
                $(location).attr('href', 'welcome.php');
            }else{
               swal("Sorry!!!", data, "error");
            }
        }
    });
});
});