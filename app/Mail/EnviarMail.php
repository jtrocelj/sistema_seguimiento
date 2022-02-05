<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarMail extends Mailable
{
    use Queueable, SerializesModels;

    public $info;
    public $contra;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$d)
    {
        $this->info = $data;
        $this->contra = $d;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('INGRESO AL SISTEMA DE SEGUIMIENTO DE TRABAJO DE GRADO')->view('mail');
    }
}
