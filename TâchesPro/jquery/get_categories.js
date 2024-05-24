$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: './ajax/get_categories.php',
        data: {t:"o"},
        success: function(data) {
            $('.select_Toutes_catégories').html(data);
            $('.selec_categori').html(data);
            $('.selectt').html(data);
            $('.modifier_catégories').html(data);
        }
    });
});
