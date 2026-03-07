<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class PublicController extends Controller
{
    public function contacts()
    {
        return view('contacts');
    }

    public function contactUs(Request $request)
    {
        $user = $request->input('user');
        $email = $request->input('email');
        $message = $request->input('message');

        $userData = compact('user', 'email', 'message');

        try {
            Mail::to($email)->send(new ContactMail($userData));

            return redirect()
                ->route('homepage')
                ->with('email_sent', 'Hai correttamente inviato una email.');
        } catch (Throwable $e) {
            return redirect()
                ->route('homepage')
                ->with('email_error', "C'e stato un problema con l'invio della mail. Per favore, riprova piu tardi.");
        }
    }
}
