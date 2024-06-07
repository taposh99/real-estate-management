<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;
   
    /**
     * Create a new message instance.
     */


     public $token;
    public function __construct()
    {
        $this->token = $token ;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->view('emails.reset')
                    ->subject('Reset Password Notification')
                    ->with(['token' => $this->token]);
    }
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
