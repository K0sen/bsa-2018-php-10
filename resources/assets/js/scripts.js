$(document).ready(function() {
    $('.currency-rate-form').on('submit', function(e) {
        e.preventDefault();

        let url = e.currentTarget.action;
        let value = $(e.currentTarget).find('#rate').val();
        $.ajax({
            url: url,
            type: 'PATCH',
            data: {rate: value},
            success: function(result) {
                window.location.replace(window.location.origin + "/currencies");
            },
            error: function(error) {
                alert(error.responseJSON.message);
            }
        });
    });
});