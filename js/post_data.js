$('#submit').click(function() {
    var name = $("#name").val();
    var email = $("#email").val();
    var state = $("#state").val();
    var city = $("#city").val();
    $.ajax({
        url: './utils-back/post.php',
        type: 'POST',
        data: {
            name: name,
            email: email,
            state: state,
            city: city

    },
    success: function(msg) {
        $("#formColom")[0].reset();
        $("#Finish").modal("show");
    }
    });
    return false;
});