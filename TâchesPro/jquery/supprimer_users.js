setInterval(() => {
    let button_sup=document.querySelectorAll(".button_sup")
    button_sup.forEach((e)=>{
      e.addEventListener('click',()=>{
         let t=e.classList.value
         let users_supprimer=t.replace(' button_sup','')
         $.ajax({
             method: 'POST',
             url: './ajax/supprimer_users.php',
             data: {
                users_supprimer
             },
             success: function(data) {
                $('.all_user').html(data);
                
                 
             }
         });
      })
    })
 }, 500);