$(function(){
    $('.inpourt').on("click",function(){
        var formData = new FormData();
        formData.append('file', $('.input_file_tache')[0].files[0]);
            $.ajax({
            method:'POST',
            url:'./ajax/inpourt.php',
            data:formData,
            contentType: false,
            processData: false,
            success:function(data){
               
            }
        })      
    })
})