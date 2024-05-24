$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: './ajax/page_profile_ready_color.php',
        data: {
            color: "w"
        },
        success: function(data) {
            document.body.style.backgroundColor=data
            header.style.backgroundColor=data
            $(".input_color").val(data)
        }
    });
});