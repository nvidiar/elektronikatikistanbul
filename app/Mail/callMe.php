<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class callMe extends Mailable
{
    use Queueable, SerializesModels;
    public $information;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailDetail)
    {
        $this->information = $mailDetail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.callMe')->subject('Yeni arama talebi:  ' . date('d-m-y H:i:s',time()+10800));
    }
}
