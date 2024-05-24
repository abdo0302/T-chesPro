$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: './ajax/nomber_user_tache.php',
        data: {t:"o"},
        success: function(data) {
           $('.nomber_all').html(data);
            
        }
    });
});