<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getSend()
    {
        // $from=??
        // $to=??
        $content='xxxxxxxxxxxxx';
        $data = ['name' => '江珮妤', 'content'=> $content, ];
        Mail::send('email.test', $data, function($message) {
            $message->subject('Laravel 5 Mail');
            $message->to('Luxgen077@gmail.com', '江珮妤');
            $message->from('netadmin@ncut.edu.tw', 'netadmin');
        });
        return "Email 已寄出";
    }
}
