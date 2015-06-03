$(function(){
    $( ".make-order" ).click(function() {
        var title = $( this ).data( 'title' );
        var id = $( this ).data( 'id' );
        $( "#title" ).text( title );
        $( "#product_id" ).val( id );
    });

    // Отправка запроса на прайс-лист
    $("#send_order").click(function() {
        $('#loading-div').fadeIn();
        $('#errors-price-div').hide();
        $('#success-price-div').hide();

        $.ajax({
            url: 'home/make-order',
            method: 'POST',
            data: {
                name : $('#name').val(),
                phone : $('#phone').val(),
                email : $('#email').val(),
                comments : $('#comments').val(),
                product_id : $('#product_id').val()
            },
            beforeSend: function (xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-XSRF-TOKEN', token);
                }
            }
        })
        .done(function() {
            $('#success-price-div').fadeIn();
        })
        .fail(function(data) {
            // Выводим ошибки
            $('#errors-text').html('');
            if (data.responseJSON) {
                if (data.responseJSON.name) {
                    $.each(data.responseJSON.name, function (key, value) {
                        $('#errors-text').html($('#errors-text').html() + value + '<br/>');
                    });
                }
                if (data.responseJSON.email) {
                    $.each(data.responseJSON.email, function (key, value) {
                        $('#errors-text').html($('#errors-text').html() + value + '<br/>');
                    });
                }
                if (data.responseJSON.phone) {
                    $.each(data.responseJSON.phone, function (key, value) {
                        $('#errors-text').html($('#errors-text').html() + value + '<br/>');
                    });
                }
                if (data.responseJSON.completed) {
                    $.each(data.responseJSON.completed, function (key, value) {
                        $('#errors-text').html($('#errors-text').html() + value + '<br/>');
                    });
                }
                if (data.responseJSON.product_id) {
                    $.each(data.responseJSON.product_id, function (key, value) {
                        $('#errors-text').html($('#errors-text').html() + value + '<br/>');
                    });
                }
            } else {
                $('#errors-text').html('Извините, произошла неизвестная ошибка. Отправить запрос не удалось.');
            }
            $('#errors-price-div').fadeIn();
        }).
        always(function(){
            $('#loading-div').hide();
        });
    });
});