<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PesanKontak extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
{
    return $this->subject('Pesan Baru dari Website: ' . $this->data['subjek'])
                 ->replyTo($this->data['email'], $this->data['nama'])
                 ->view('email.kontak');
}
}