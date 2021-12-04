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
                if(httpObj.status==401){
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

   if($('#drop-nav').hasClass('hide-master')){
       $('#drop-nav').removeClass('hide-master')
   }else{
       $('#drop-nav').addClass('hide-master')
   }

})


