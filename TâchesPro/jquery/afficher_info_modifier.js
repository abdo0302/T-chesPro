setInterval(() => {
    let modifier=document.querySelectorAll(".modifier")
    modifier.forEach((e)=>{
      e.addEventListener('click',()=>{
        section_modifier.style.display='flex';
         let t=e.classList.value
         let tach_modifier=t.replace(' modifier','')
         $.ajax({
             method: 'POST',
             url: './ajax/afficher_info_modifier.php',
             data: {
                tach_modifier
             },
             success: function(data) {
                  $('.form_modifier').html(data);
                 
             }
         });
      })
    })
 }, 500);