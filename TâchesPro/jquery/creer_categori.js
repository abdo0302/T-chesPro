$(function(){
    $('.button_submit').on("click",function(){
           $.ajax({
            method:'POST',
            url:'./ajax/creer_categori.php',
            data:{
                  nameCtegori:$(".input_name_categori").val()
                },
            success:function(data){
                $(".input_name_categori").val('')              
                 $('.select_Toutes_catégories').html(data);
                 $('.selec_categori').html(data);
                 $('.selectt').html(data);
                 $('.modifier_catégories').html(data);
            }
        }) 
    })
})
