$(function(){
    $('.submit_sin_in').on("click",function(){
        if(sin_in_validi==true){
            $.ajax({
            method:'POST',
            url:'./ajax/sin_in.php',
            data:{emaill:$(".email_sin_in").val(),pass:$(".password_sin_in").val()},
            success:function(data){
                 $('.email_sin_in').val('')
                $('.password_sin_in').val('')
                if(data=='user'){
                    window.location.href='profile.php'
                }else if(data=='admin'){
                    window.location.href='admin.php'
                }else{
                    alert(data)
                }
            }
        }) 
        }
           
    })
})