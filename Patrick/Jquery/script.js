$(Document).ready(function () {

    $('#btn-salvar').click(function () {

        var numero1 = $('#numero1').val();
        var numero2 = $('#numero2').val();

        if (numero1 > numero2) {
            $('#resultado').html('O número ' + numero1 + ' é maior que ' + numero2);
        } else if (numero1 < numero2) {
            $('#resultado').html('O número ' + numero1 + ' é menor que ' + numero2);
        } else {
            $('#resultado').html('O número ' + numero1 + ' é igual ao ' + numero2);
        }
    });
    $('#numero1').focus(function () {
        $(this).css('background-color', '#87CEFA');
    }
    );
    $('#numero2').focus(function () {
        $(this).css('background-color', '#FF8C00');
    }
    );
    $('#btn-salvar').click(function () {
        $(this).css('background-color', 'lime');
        $('#resultado').addClass('fundo');
    });
    
    $('#remove').click(function () {
        $(this).css('background-color', 'red');
        $('#resultado').removeClass('fundo');
        $('#resultado').html('');
        $('#numero1, #numero2').val('');
    });
});

