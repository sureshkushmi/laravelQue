<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use App\Mail\CustomEmail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        // Dispatch the job to send the email
        SendEmailJob::dispatch()->onQueue('emails');
    
        // Return the 'emails.sent' view
        return view('emails.sent');
    }
    
}

