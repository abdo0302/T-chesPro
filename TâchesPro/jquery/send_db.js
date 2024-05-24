$(function(){
    $('.send').on("click",function(){
            $.ajax({
            method:'POST',
            url:'./ajax/send_db.php',
            data:{o:'k'},
            contentType: false,
            processData: false,
            success:function(data){
               alert(data)
            }
        })      
    })
})