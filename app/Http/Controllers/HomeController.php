<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function sendFormToEmail(Request $request)
    {
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $Company = $request->Company;
        $Subject = $request->Subject;
        $textMessage = $request->textMessage;

        $validator = Validator::make($request->all(), [
            'email'=>'required|email'
        ]);
        if(count($validator->errors()->all()) >0 ){
            return "Error email, please enter right email";
        }

        $message = "<html><body>.
                .firstName = $firstName
                .lastName = $lastName
                .email = $email
                .Company = $Company
                .Subject = $Subject
                .textMessage = $textMessage
                .</body></html>";

        mail('antonm1.manzhos@gmail.com', 'My Subject', $message);


        return $message;
    }
}
