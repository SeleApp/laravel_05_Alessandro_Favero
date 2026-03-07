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
        $validatedData = $request->validate([
            'user' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ]);

        $recipientAddress = config('mail.to.address', config('mail.from.address'));
        $recipientName = config('mail.to.name');

        try {
            Mail::to($recipientAddress, $recipientName)
                ->send(
                    (new ContactMail(
                        user: $validatedData['user'],
                        email: $validatedData['email'],
                        message: $validatedData['message'],
                    ))->replyTo($validatedData['email'], $validatedData['user'])
                );

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
