$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: './ajax/page_profile_ready_t.php',
        data: {
            nameCtegori: "w"
        },
        success: function(data) {
         // alert(data)
          $('.contenar_les_tache').html(data);
        }
    });
});
