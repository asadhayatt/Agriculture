<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public $thankYou;
    public function __construct($contact)
    {
        $this->thankYou = $contact;
    }

  public function build(){
    return $this
    ->subject('Thanking Mail -- Agri Connect corp.')
    ->markdown('Frontend.emails.thankyou');
  }


    public function attachments(): array
    {
        return [];
    }
}
