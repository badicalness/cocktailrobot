$(document).ready(function () {
    var selectedDrink = [];

    $('#content .flavors article').on('click', function (event) {
        var element = $(event.currentTarget);
        selectedDrink.push($(element).text());
        element.addClass('selected');
        $('#content .ingredients').show();
        $('#content .ingredients span').text(selectedDrink.join(' + '));
        $('#content .reset-button').show();
    });

    $('#content .reset-button').on('click', function () {
        selectedDrink = [];
        $('#content .flavors article').removeClass('selected');
        $('#content .ingredients').hide();
        $('#content .reset-button').hide();
    });


    $('#content footer button').on('click', function () {
        if (selectedDrink.length < 1 ) {
            return;
        }

        $('#content').hide();
        $('#connect-view').show();
    });

    $('#connect-view footer button').on('click', function () {
        var connectCode = $('#connect-view #connect-code').val();
        if (connectCode.length < 4) {
            return;
        }

        $('#connect-view').hide();
        $('#result-view').show();

        $.post(window.appConfig.serverUrl, {
            selectedDrink: selectedDrink,
            connectCode: connectCode
        })
            .done(function() {
                $('#result-view .success').show();
            })
            .fail(function() {
                $('#result-view .failure').show();
            })
            .always(function() {
                $('#result-view .loading').hide();
                $('#result-view .restart-link').show();
            });
    });
});