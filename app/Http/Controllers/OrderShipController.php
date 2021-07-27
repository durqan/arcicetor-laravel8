<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class OrderShipController extends Controller
{
    public function __invoke()
    {
        /*$details =
            [
                'Email' => $_POST['Email'],
                'Name' => $_POST['Name'],
                'SecondName' => $_POST['SecondName'],
                'LastName' => $_POST['LastName'],
                'PhoneNumber' => $_POST['PhoneNumber'],
                'Commentary' => $_POST['Commentary']
            ];
*/
        if (!empty($_POST['Email']) && filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) === false) {
            $details =
                [
                    'Email' => $_POST['Email']
                ];
        };

        if (!empty($_POST['Name']) && strlen($_POST['Name']<=20) && preg_match("/^[а-яА-я]$/", $_POST['Name']))

        $SendMessage = Mail::to('duircianos@yandex.ru')->send(new OrderShipped($details));

        return $SendMessage;
    }
}
