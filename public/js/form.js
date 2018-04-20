$('#order-form').on('click', function (e) {
    e.preventDefault();
    $('#overlay').fadeIn(400,
        function () {
            $('#modal_form')
                .css('display', 'block')
                .animate({opacity: 1, top: '50%'}, 200);
        });
});

$('#modal_close, #overlay').click(function () {
    $('#modal_form, #modal_form-add')
        .animate({opacity: 0, top: '45%'}, 200,
            function () {
                $(this).css('display', 'none');
                $('#overlay').fadeOut(400);
            }
        );
});

$('.js-order').on('submit', function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    form = $(this);
    data = form.serialize();
    var url = form.attr('action');
    $.ajax({
        url: url,
        method: 'POST',
        cache: false,
        dataType: 'JSON'
    }).done(function (data) {
        form.append($('<p>')
            .text('Заказ успешно отправлен. Обновите страницу!'))
    }).fail(function (jqXHR, textStatus) {
        console.log(textStatus);
        console.log(tjqXHR);
});
});