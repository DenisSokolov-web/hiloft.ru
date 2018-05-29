<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CtaPartnershipFormHandler extends Controller
{
    public function index(Request $request)
    {
        $number = $request->input('phone');

        $mail_to = "denis.sokolov-web@yandex.ru";

        $subject = 'Заявка по аренде с сайта HiLoft';

        $message = "
            <html>
                <head>
                    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"> 
                </head>
                <body>
                    <h3>Заявка на от арендодеталя</h3>
                        <p>Данные по заявке:</p>
                        <ul>
                            <li>Телефон посетителя: $number</li>
                        </ul>
                </body>
            </html>
            ";

        $headers = 'From: info@hiloft.ru' . "\r\n";
        $headers .= "Content-type: text/html; charset=utf8 \r\n";

        mail($mail_to, $subject, $message, $headers);

        return $number;
    }
}
