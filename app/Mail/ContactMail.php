<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public string $name;
    public string $email;
    public string $body;


    public function __construct(string $name, string $email, string $body)
    {
        //
        $this->name=$name;
        $this->email=$email;
        $this->body=$body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('Contact mail from abdoulnasser.com')->replyTo($this->email)->view('email.contact');
    
    }
}
