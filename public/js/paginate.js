var page = 1;
$(window).scroll(function() {
    if ($(window).scrollTop() >= $(document).height() - $(window).height() - 10) {
        page++;
        loadMoreData(page);
    }
});


function loadMoreData(page) {
    $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            beforeSend: function () {
                $('.ajax-load').show();
            }
        })
        .done(function (data) {
            if (data.html === "") {
                $('.ajax-load').html("Mostrando todos os resultados");
                return;
            }
            $('.ajax-load').hide();
            $(".products-list").append(data.html);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('server not responding...');
        });
}
