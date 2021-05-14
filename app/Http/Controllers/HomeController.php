<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            'email' => 'required|email'
        ]);
        if (count($validator->errors()->all()) > 0) {
            return "Error email, please enter right email";
        }

        $to_name = "Timur";
        $to_email = "no-reply@ec.com";

        $data = array("firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "Company" => $Company,
            "Subject" => $Subject,
            "textMessage" => $textMessage
        );
        Mail::send("email.mail", $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject("new registration on thecleverconsulting.com");
            $message->from("no-reply@employeeconfidential.com", "Test Mail");
        });
    }
}
