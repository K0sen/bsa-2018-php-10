<?php

namespace App\Services;

use App\Entity\Currency;
use App\Http\Requests\RateCurrencyRequest;
use Illuminate\Database\Eloquent\Collection;

class CurrencyRepository
{
    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return Currency::all();
    }

    public function update(RateCurrencyRequest $request, Currency $currency): Currency
    {
        $currency->rate = $request->rate;
        $currency->save();

        return $currency;
    }
}
