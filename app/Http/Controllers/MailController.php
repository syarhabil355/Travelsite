<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\travelmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    
    public function index(){

	$details = [
    'title' => 'Mail from websitepercobaan.com',
    'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('bananacreamy08@gmail.com')->send(new travelmail($details));
   
    dd("Email sudah terkirim.");

	}
}