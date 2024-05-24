setInterval(() => {
    let Afficher=document.querySelectorAll(".Afficher")
    Afficher.forEach((e)=>{
      e.addEventListener('click',()=>{
        section_Afficher.style.display='flex';
         let t=e.classList.value
         let tach_Afficher=t.replace(' Afficher','')
         $.ajax({
             method: 'POST',
             url: './ajax/Afficher.php',
             data: {
                tach_Afficher
             },
             success: function(data) {
                  $('.ffffff').html(data);
                 
             }
         });
      })
    })
 }, 500);