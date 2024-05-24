$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: './ajax/git_users.php',
        data: {t:"o"},
        success: function(data) {
           $('.all_user').html(data);
            
        }
    });
});