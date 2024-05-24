$(function(){
    $('.button_Exporter').on("click",function(){
            $.ajax({
            method:'POST',
            url:'./ajax/admin_export.php',
            data:{o:'k'},
            success:function(data){
                var fileUrl = './tache.csv';
                var fileName = 'allData.csv';
                var a = document.createElement('a');
                a.href = fileUrl;
                a.download = fileName;
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            }
        })      
    })
})