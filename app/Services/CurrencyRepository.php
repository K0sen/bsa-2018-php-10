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

    /**
     * @param $id
     * @return Currency|null
     */
    public function findById($id): ?Currency
    {
        return Currency::find($id);
    }

    /**
     * @param RateCurrencyRequest $request
     * @param                     $id
     * @return Currency
     */
    public function updateRate(RateCurrencyRequest $request, $id): Currency
    {
        $currency = $this->findById($id);
        $currency->rate = $request->rate;
        $currency->save();

        return $currency;
    }
}
