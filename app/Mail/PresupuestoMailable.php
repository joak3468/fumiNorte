<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PresupuestoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Consulta - Presupuesto';
    public $informacion;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->informacion = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.presupuesto');
    }
}
 