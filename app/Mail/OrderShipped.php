<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $pas;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pas)
    {
        $this->pas =$pas;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Order Shipped',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

    public function build()
    {
        return $this->from('example@example.com', 'Example')
            ->to('123@1')
            ->view('layouts.mail')->with([
                'pas' => $this->pas,
            ]);
    }


}
