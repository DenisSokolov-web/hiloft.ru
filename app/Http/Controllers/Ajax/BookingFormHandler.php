<?php

namespace App\Http\Controllers\Ajax;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingFormHandler extends Controller
{
    public function index(Request $request)
    {
        $hotel = Hotel::find($request->hotel_id);

        $emails =
            "denis.sokolov-web@yandex.ru,
            $hotel->email";

        $mail_to = $emails;

        $subject = 'Заявка на бронирование с сайта HiLoft';

        $message = "
            <html>
                <head>
                    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"> 
                </head>
                <body>
                    <h3>Заявка на бронирование</h3>
                        <p>Данные по заявке:</p>
                        <ul>
                            <li>Имя клиента: $request->name</li>
                            <li>Телефон клиента: $request->phone</li>
                            <li>Email клиента: $request->email</li>
                            <li>Название брони: $request->room_name</li>
                            <li>Количество брони: $request->quantity</li>
                        </ul>
                </body>
            </html>
            ";

        $headers = 'From: info@hiloft.ru' . "\r\n";
        $headers .= "Content-type: text/html; charset=utf8 \r\n";

        mail($mail_to, $subject, $message, $headers);

        return $request->all();
    }
}
