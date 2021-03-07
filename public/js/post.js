$(function(){
    $('#form-data').submit(function(e){
        // alert('it is word');
        var route = $('#form-data').data('route');
        var form_data = $(this);
        $.ajax({
            type: 'POST',
            url : route,
            data: form_data.serialize(),
            success: function(Response){
                // alert("true!!!!!!!!!!!!!")
                console.log(Response);
                // Response.name
            }
        });

        e.preventDefault();
    });
});