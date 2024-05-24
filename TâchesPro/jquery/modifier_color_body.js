$(function(){
    $('.button_chonge_color').on("click",function(){
        let header=document.querySelector('#header')
            $.ajax({
            method:'POST',
            url:'./ajax/modifier_color_body.php',
            data:{color:$(".input_color").val()},
            success:function(data){
                document.body.style.backgroundColor=data
                header.style.backgroundColor=data
            }
        }) 
           
    })
})