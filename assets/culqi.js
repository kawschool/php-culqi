Culqi.publicKey = 'pk_test_P5IG7NFvCwdrA9zm';
Culqi.init();

function culqi() {
   
    if ( Culqi.token ) {
        var token = Culqi.token.id;
        var amount = $('#amount').val();
        var _form = $('form');
        _form.find('button').addClass('is-loading');
        var notification = $('.notification');
        notification.hide();
        $.ajax({
            url: './ajax.php',
            method: 'POST',
            data: 'action=pay&token=' + token+'&amount='+amount
        }).done(function( data, textStatus, xhr ) {
            var response = JSON.parse(data);
            
            if ( response.object == 'error' ) {
                notification.show();
                notification.addClass('is-danger');
                notification.html(response.user_message);
            }else{
                notification.show();
                notification.removeClass('is-danger');
                notification.addClass('is-success');
                notification.html('Transacción completada');

            }
            _form.find('button').removeClass('is-loading');
           
        }).fail(function( xhr, status, error ) {
            _form.find('button').removeClass('is-loading');
            console.log(error);
        });

    } else {
        console.log("Culqi.error", Culqi.error);
        
        
    }
}

 


$('#culqi-card-form').validate({
    errorPlacement: function(error, element) {
        $(element).parent().append(error);
    },
    rules: {
        amount    : {
            required:true,
            number: true
        },
        email      : 'required',
        card_number: 'required',
        exp_month  : 'required',
        exp_year   : 'required',
        cvv        : 'required'
    },
    messages: {
        amount      : 'Ingresa un monto válido.',
        email      : 'Ingresa un correo electrónico existente.',
        card_number: 'Ingresa el número de tu tarjeta correctamente.',
        exp_month  : 'Ingresa el mes correctamente.',
        exp_year   : 'Ingresa el año correctamente',
        cvv        : 'Verifica tu código de seguridad'
    },
    submitHandler: function( form ) {

        Culqi.createToken();
       
    }
});