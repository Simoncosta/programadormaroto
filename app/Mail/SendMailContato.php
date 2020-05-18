<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailContato extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataForm)
    {
        $this->dataForm = $dataForm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('saimom_costa@hotmail.com')
                ->markdown('emails.test-markdown')
                ->with([
                    'nome' => $this->dataForm['nome'],
                    'email' => $this->dataForm['email'],
                    'mensagem' => $this->dataForm['mensagem'],
                ]);
    }
}
