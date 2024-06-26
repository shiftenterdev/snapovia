<?php

namespace App\Mail;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var User
     */
    public $customer;

    /**
     * Create a new message instance.
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('😀 Resgistration success Welcome to Snapovia')
            ->markdown('emails.customer.registration');
    }
}
