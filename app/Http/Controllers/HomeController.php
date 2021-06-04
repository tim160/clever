<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $to_email = "timur160@hotmail.com";
//        $to_email = "timur160@gmail.com";

        $data = array("firstName" => $firstName,
            "lastName" => $lastName,
            "email" => $email,
            "Company" => $Company,
            "Subject" => $Subject,
            "textMessage" => $textMessage
        );
        Mail::send("email.mail", $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject("new registration on theclarify.com");
            $message->from("no-reply@employeeconfidential.com", "Test Mail");
        });
        return "success";
    }
}
