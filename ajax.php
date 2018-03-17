<?php 


try {

    $CULQI_SECRET_KEY = "sk_test_7yCevT98D5SuGzbw";
    require './vendor/autoload.php';
    $culqi = new Culqi\Culqi( array( 'api_key' => $CULQI_SECRET_KEY ) );

    $valor_compra = $_POST['amount'];

    $_total = str_replace('.', '', number_format($valor_compra, 2, '.', ''));
    $cargo = floatval($_total);
    $charge = $culqi->Charges->create(
        array(
            "amount" => $cargo,
            "antifraud_details" => array(
                "address" => 'Av. La Molina 123',
                "address_city" => 'Lima',
                "country_code" => 'PE',
                "first_name" => 'Hugo',
                "last_name" => 'Trigoso Paredes',
                "phone_number" => '51945555265',
            ),
            "capture" => true,
            "currency_code" => "PEN",
            "description" => "Venta de prueba",
            "installments" => 0,
            "email" => 'trigosope@gmail.com',
            "metadata" => array(
                'Transaction ID' => uniqid()
            ),
            "source_id" => $_POST['token']
        )
    );

    if ( $charge->object == 'charge' ) {

    }

    echo json_encode(['status'=>'success','message'=>'Compra completada']);
} catch ( Exception $error ) {
    echo $error->getMessage();
}