<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $ord;
    public function __construct($data)
    {
        //
        $this->ord = $data;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->view('userdetails')
                    ->with([
                        'ID'=> $this->ord->ID,
                        'password'=> $this->ord->password,
                    ]);
                    
    }
}
