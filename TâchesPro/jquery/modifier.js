$(document).on('click', '.modifier_tach', function() {
    var t = $(this).attr('id');
    $.ajax({
        method: 'POST',
        url: './ajax/modifier.php',
        data: {
            t: t,
            titre: $(".input_tetle_modifier").val(),
            discription: $(".input_Description_modifier").val(),
            complete: $(".modifier_complete").val()
        },
        success: function(data) {
            alert(data);
        }
    });
});
