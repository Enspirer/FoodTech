<?php

namespace App\Mail\Frontend\Contact;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class SendContact.
 */
class SendUserContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Request
     */
    public $request;

    /**
     * SendContact constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to([config('mail.from.address'), $this->request->email], config('mail.from.name'))
            ->view('frontend.mail.user_contact')
            ->text('frontend.mail.contact-text')
            ->subject(__('strings.emails.contact.subject', ['app_name' => app_name()]))
            ->from($this->request->email, $this->request->name)
            ->replyTo($this->request->email, $this->request->name);
    }
}
