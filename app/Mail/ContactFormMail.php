<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\View\Factory as ViewFactory;

class ContactFormMail extends Mailable
{
    use Queueable, InteractsWithQueue;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
  

    public function build()
    {
        $mail = $this->view('emails.contact-form')
            ->subject('Contact Form Clients')
            ->with([
                
                'name' => $this->contact->name,
                'subject' => $this->contact->subject,
                      
                'email' => $this->contact->email,
                'contactMessage' => $this->contact->message,
            ]);

        return $mail;
    }
}