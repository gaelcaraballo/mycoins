$(document).ready(function () {
    $('#search-btn').click(function () {
        search();
    });
    $('#search-input').keydown(function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            search();
        }
    });
});

function search() {
    const query = $('#search-input').val();
    $.ajax({
        url: '/searchPlace',
        data: {query: query},
        success: function (data) {
            $('#search-results').html(data);
        }
    });
}
