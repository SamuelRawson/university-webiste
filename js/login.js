$(function(){
    $("#error-msg").hide();
    $("#login").click(function(e){
        let self = $(this)
        e.preventDefault();
        self.prop('disabled', true);
        var data = $('#form').serialize();

        $.jax({
            url: '/login.php',
            type: "POST",
            data: data,
        }).done(function(res){
            res = JSON.parse(res);
            if (res['status']){
                location.href ="login.php";
            }else{
                var errorMessage = '';
                console.log(res.msg);
                $.each(res['msg'], function(index, message){
                    errorMessage += '<div>' + message + '</div>';
        
                });
                $("#error-msg").html(errorMessage);
                $("#error-msg").show();
                self.prop('disabled', false);
            }

        }).fail(function(){
            alert("error");
        }).always(function(){
            self.prop('disabled', false);

        });
    });
});