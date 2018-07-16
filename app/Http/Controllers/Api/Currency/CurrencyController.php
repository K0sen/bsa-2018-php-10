<?php

namespace App\Http\Controllers\Api\Currency;

use App\Entity\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\RateCurrencyRequest;
use App\Services\CurrencyRepository;

class CurrencyController extends Controller
{
    private $currencyRepository;
    /**
     * CurrencyController constructor.
     * @param CurrencyRepository $currencyRepository
     */
    public function __construct(CurrencyRepository $currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }

    /**
     * @param RateCurrencyRequest $request
     * @param Currency            $currency
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateRate(RateCurrencyRequest $request, Currency $currency)
    {
        var_dump($currency);
        die();
        return view('currency.currency-list');
    }
}
