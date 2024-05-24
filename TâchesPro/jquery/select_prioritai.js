$('.select_prioritai').on('change', function() {
    $.ajax({
        method: 'POST',
        url: './ajax/select_prioritai.php',
        data: {
            prioritai: $(".select_prioritai").val()
        },
        success: function(data) {
            $('.contenar_lestache_prioritai').html(data);
        }
    });
});