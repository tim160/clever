<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getAjaXCall() {
        //return"this is get request";
        throw new \Exception("test exception");
    }
    public function postAjaxCall() {
        return"this is post ajax request";
    }
}
