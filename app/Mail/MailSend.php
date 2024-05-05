<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSend extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }
    
    //Kalau mau kasih attachment
     public function attachments()
     {
        return [];
     }

    public function build()
    {
        return $this->subject('Verifikasi Akun')
                    ->view('mailTemplate');
    }
}
