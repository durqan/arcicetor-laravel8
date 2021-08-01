<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class ValidateEmail extends Controller
{
    public function validates(Request $request)
    {
        $details = [];

        if (!empty($request->input())) {
            foreach ($request->input() as $key => $value) {
                $details[$key] = strip_tags($value);
            }
        }

        else {
            return "Ничего не введено";
        }

        $validated = Validator::make($details, [
            'Email' => 'required|max:50|email',
            'Name' => 'required|max:20|alpha',
            'SecondName' => 'required|max:20|alpha',
            'LastName' => 'required|max:20|alpha',
            'PhoneNumber' => 'required|max:30'
        ]);

        $errors = $validated->errors();
        $ErrorsMessages = [];
            foreach ($errors->all() as $message) {
                $ErrorsMessages[] = $message;
            }

            if(!empty($ErrorsMessages))
            return json_encode($ErrorsMessages);

            else {
            Mail::to('duircianos@yandex.ru')->send(new OrderShipped($details));
                return json_encode($details);
        }
    }
}
