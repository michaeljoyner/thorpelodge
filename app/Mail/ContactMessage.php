<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $email;
    public $phone;
    public $function_type;
    public $attendees;
    public $proposed_date;
    public $inquiry;

    /**
     * Create a new message instance.
     *
     */
    public function __construct($message)
    {
        $this->name = $message['name'] ?? 'Not provided';
        $this->email = $message['email'] ?? 'Not provided';
        $this->phone = $message['phone'] ?? 'Not provided';
        $this->function_type = $message['function_type'] ?? 'Not provided';
        $this->attendees = $message['attendees'] ?? 'Not provided';
        $this->proposed_date = $message['proposed_date'] ?? 'Not provided';
        $this->inquiry = $message['inquiry'] ?? 'Not provided';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from([$this->name => $this->email])
            ->subject('Site message from ' . $this->name)
            ->markdown('email.contact');
    }
}
