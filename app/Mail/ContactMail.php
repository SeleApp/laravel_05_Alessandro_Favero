<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public array $userData;

    public function __construct(array $userData)
    {
        $this->userData = $userData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Grazie per averci contattato',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contact_mail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
