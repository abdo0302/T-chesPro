
    $('.selectt').on('change', function() {
        $.ajax({
            method: 'POST',
            url: './ajax/select_catigori.php',
            data: {
                Ctegori: $(".selectt").val()
            },
            success: function(data) {
                $('.contenar_les_tache_par_categoti').html(data);
            }
        });
    });

