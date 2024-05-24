setInterval(() => {
   let supprimer=document.querySelectorAll(".supprimer")
   supprimer.forEach((e)=>{
     e.addEventListener('click',()=>{
        let t=e.classList.value
        let tach_supprimer=t.replace(' supprimer','')
        $.ajax({
            method: 'POST',
            url: './ajax/supprimer_tach.php',
            data: {
                tach_supprimer
            },
            success: function(data) {
                 $('.contenar_les_tache_par_categoti').html(data);
                 $('.contenar_lestache_prioritai').html(data);
                
            }
        });
     })
   })
}, 500);
