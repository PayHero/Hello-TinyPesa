<?php

    $url="https://tinypesa.com/api/v1/express/initialize";
    
    $data = array(
        'amount' => 1,
        'msisdn' => '254797762011',
        'account_no'=> 'BitRate'
    );
    $headers = array(
        "Content-Type: application/json",
        "ApiKey: "hTOuzFA2nzTWDDpW41WsOl08zkQfv6-KB6y5mseh"
    );

    $data_options = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_options);
    $resp = curl_exec($ch);
    curl_close($ch);

    var_dump($resp);
?>
