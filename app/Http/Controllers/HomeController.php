<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{

    function pay() {
        $request = [
            'pg_merchant_id' => '530044',
            'pg_testing_mode' => false,
            'pg_currency' => 'RUB', // Валюта
            'pg_amount' => '1500', // Стоимость
            'pg_salt' => 'randomStringForProfessionModel',
            'pg_success_url_method' => 'GET',
            'pg_description' => 'Приобретение "Умный ёжик"',
            'pg_success_url' => route('pay.success'),
            'pg_result_url' => route('index')
        ];
        ksort($request); //sort alphabetically
        array_unshift($request, 'payment.php');
        array_push($request, 'JLx0OEMuSkWeALYH');
        $request['pg_sig'] = md5(implode(';', $request));
        unset($request[0], $request[1]);
        $query = http_build_query($request);
        return redirect('https://api.paybox.money/payment.php?' . $query);
    }

    function pay_success() {
        return redirect()->route('index')->with('message', 'Вы успешно приобрели программу');;
    }
}
