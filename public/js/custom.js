$(document).ready(function () {
    $(".remover-item").on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var url = $(this).data('route');

        Swal.fire({
            title: 'Voce tem certeza?',
            text: "Que deseja remover o item do carrinho",
            icon: 'warning',
            showCancelButton: true,
            showLoaderOnConfirm: true,
            confirmButtonColor: '#4D22C5',
            cancelButtonColor: '#252525',
            confirmButtonText: 'Sim',
            cancelButtonText: "Não"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: url,
                    data: {
                        id: id,
                    },
                    type: 'DELETE',
                    success: function (response) {
                        Swal.fire(
                            "Removido!",
                            'Item removido do carrinho!',
                            'success'
                        )
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        Swal.fire(
                            'Oops!',
                            'Ocorreu um erro',
                            'error'
                        )
                    }
                });

            }
        })
    })


    $(".image-list").on('click', function (e) {
        e.preventDefault();
        var image = $(this).attr('src');
        $(".current-image").attr("src", image);
        $(".current-image").css('width', '100%');
    })
})


$('.favorito-action').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var url = $(this).data('route');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        data: {
            id: id,
        },
        type: 'POST',
        success: function (response) {
            setTimeout(() => {
                location.reload();
            }, 100);
        },
        error: function (httpObj, textStatus) {
            if (httpObj.status == 401) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    confirmButtonColor: '#4D22C5',
                    text: 'Você precisa estar logado para inserir um produto à lista de favoritos',
                    footer: '<a href="/login"><strong>Entrar na minha conta</strong></a>'
                })
            }

        }
    });
});

$('#drop-navigate').on('click', function (e) {
    e.preventDefault()

    if ($('#drop-nav').hasClass('hide-master')) {
        $('#drop-nav').removeClass('hide-master')
    } else {
        $('#drop-nav').addClass('hide-master')
    }

})


$(".stars").each(function () {
    var val = $(this).data("rating");
    var rating = Math.round(val * 2) / 2;
    var stars = [];
    for (var i = rating; i >= 1; i--)
        stars.push('<i class="fa fa-star" aria-hidden="true" style="color: #4D22C5;"></i>');

    // If there is a half a star, append it
    if (i == .5) stars.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: #4D22C5;"></i>');

    // Fill the empty stars
    for (let i = (5 - rating); i >= 1; i--)
        stars.push('<i class="fa fa-star-o" aria-hidden="true" style="color: #4D22C5;"></i>');

    $(this).append(stars);

});


$('input[name="marcas"]').on('change', function (e) {
    var marcas = [];
    $('input:checkbox[name=marcas]').each(function () {
        if ($(this).is(':checked'))
            marcas.push($(this).val());
    });
    var url = '/jornada/produtos/busca/' + marcas;
    $.ajax({
        type: 'GET',
        url: url,
        success: function (data) {
            window.location.href = url
        },
        error: function () {
            console.log(data);
        }
    });
})


