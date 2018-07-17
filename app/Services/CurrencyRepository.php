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
     * @param RateCurrencyRequest $request
     * @param int                 $id
     * @return bool
     * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     */
    public function updateRate(RateCurrencyRequest $request, $id): bool
    {
        $currency = Currency::find($id);
        $currency->rate = $request->rate;

        return $currency->save();
    }
}
