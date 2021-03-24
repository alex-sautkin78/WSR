$(document).ready(function () {
    $('.del').on('submit', function (e) {
        let d = confirm('Вы действительно хотите удалить свою заявку?');
        if (!d) {
            e.preventDefault();
        }
    });

    function new_line() {
        let status_update = $('#status_update').val();

        $('#prichina_block').hide();
        $('#photo2').hide();

        if (status_update == 14) {
            $('#prichina_block').hide();
            $('#photo2').show();
        } else if (status_update == 13) {
            $('#prichina_block').show();
            $('#photo2').hide();
        }
    };

    new_line();
})


