<?php

namespace App\Http\Controllers\Currency;

use App\Http\Controllers\Controller;
use App\Http\Requests\RateCurrencyRequest;
use App\Jobs\SendRateChangedEmail;
use App\Mail\RateChanged;
use App\Services\CurrencyRepository;
use App\Services\UserRepository;
use Illuminate\Support\Facades\Gate;

class CurrencyController extends Controller
{
    private $currencyRepository;
    private $userRepository;

    /**
     * CurrencyController constructor.
     *
     * @param CurrencyRepository $currencyRepository
     * @param UserRepository     $userRepository
     */
    public function __construct(CurrencyRepository $currencyRepository, UserRepository $userRepository)
    {
        $this->currencyRepository = $currencyRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $currencies = $this->currencyRepository->findAll();

        return view('currency.currency-list', compact('currencies'));
    }

    /**
     * @param RateCurrencyRequest $request
     * @param                     $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateRate(RateCurrencyRequest $request, $id)
    {
        $currency = $this->currencyRepository->findById($id);
        if (Gate::denies('update_rate', $currency)) {
            abort(403);
        }

        $newCurrency = $this->currencyRepository->updateRate($request, $id);
//        $users = $this->userRepository->findAll();
//        foreach ($users as $user) {
//            SendRateChangedEmail::dispatch(
//                new RateChanged($user, $currency->name, $currency->rate, $newCurrency->rate)
//            )->onQueue('notification');
//        }

        return redirect()->route('currencies');
    }
}
