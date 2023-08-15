<?php

namespace App\Mail;

use App\Models\Template;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConfirmMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function build()
    {
        return $this->subject($this->mailData["subject"])->view('mail',
        [
            "name" =>  $this->mailData["name"],
            "email" =>  $this->mailData["email"],
            "phone" =>  $this->mailData["phone"],
            "subject" =>  $this->mailData["subject"],
            "messagex" => $this->mailData["messagex"]
        ]);
    }
}
