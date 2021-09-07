<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Reviews extends Mailable
{
    use Queueable, SerializesModels;
  
    public $reviews = false;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reviews)
    {
        //
      $this->reviews = $reviews;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.reviews');
    }
}
