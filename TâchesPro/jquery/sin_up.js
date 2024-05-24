$(function(){
    $('.submit_sin_up').on("click", function(){
        if(sin_up === true){
            var formData = new FormData();
            formData.append('name', $(".input_name").val());
            formData.append('email', $(".input_email").val());
            formData.append('password', $(".input_password").val());
            formData.append('image', $('.image')[0].files[0]);

            $.ajax({
                method: 'POST',
                url: './ajax/sign_up.php',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data){
                    $('.input_name').val('');
                    $('.input_email').val('');
                    $('.input_password').val('');
                    alert(data);
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
        }
    });
});
