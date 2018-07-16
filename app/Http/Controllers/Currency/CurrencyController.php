<?php

namespace App\Http\Controllers\Currency;

use App\Http\Controllers\Controller;
use App\Services\CurrencyRepository;

class CurrencyController extends Controller
{
    private $currencyRepository;

    /**
     * CurrencyController constructor.
     *
     * @param CurrencyRepository $currencyRepository
     */
    public function __construct(CurrencyRepository $currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $currencies = $this->currencyRepository->findAll();

        return view('currency.currency-list', compact('currencies'));
    }
}
