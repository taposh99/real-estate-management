<?php

namespace App\Mail;

use App\Models\Contact;
use App\Models\ContactForm;
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
    public function __construct(ContactForm $contact)
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
                'number' => $this->contact->number,
                'contactMessage' => $this->contact->message,
            ]);

        return $mail;
    }
}