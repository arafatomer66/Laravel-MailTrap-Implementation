<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtrap;

class MailController extends Controller
{
    public function index(){
        Mail::to('arafatomer66@gmail.com')->send(new Mailtrap());
    }
}
