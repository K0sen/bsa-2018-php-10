<?php

namespace App\Jobs;


use App\Entity\Currency;
use App\Mail\RateChanged;
use App\Entity\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendRateChangedEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $user;
    public $oldRate;
    public $currency;

    /**
     * Create a new job instance.
     *
     * SendRateChangedEmail constructor.
     * @param User     $user
     * @param Currency $currency
     * @param float    $oldRate
     */
    public function __construct(User $user, Currency $currency, float $oldRate)
    {
        $this->user = $user;
        $this->currency = $currency;
        $this->oldRate = $oldRate;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->user->email)->send(new RateChanged(
            $this->user->name,
            $this->currency->name,
            $this->oldRate,
            $this->currency->rate
        ));
    }
}