<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailTestController extends Controller
{
    public function sendTestEmail()
    {
        $details = [
            'title' => 'Mail from Laravel',
            'body' => 'This is a test email sent from Laravel'
        ];

        Mail::to('your_email@example.com')->send(new \App\Mail\OrderShipped($details));

        return 'Email has been sent';
    }
}
