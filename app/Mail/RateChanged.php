<?php

namespace App\Mail;

use App\Entity\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RateChanged extends Mailable
{
    use Queueable, SerializesModels;

    public $currencyName;
    public $userName;
    public $oldRate;
    public $newRate;

    /**
     * Create a new message instance.
     *
     * RateChanged constructor.
     * @param       $userName
     * @param       $currencyName
     * @param float $oldRate
     * @param float $newRate
     */
    public function __construct(User $userName, $currencyName, float $oldRate, float $newRate)
    {
        $this->userName = $userName;
        $this->currencyName = $currencyName;
        $this->oldRate = $oldRate;
        $this->newRate = $newRate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.rateChanged');
    }
}
