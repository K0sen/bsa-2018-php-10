<?php

namespace App\Http\Controllers\Api\Currency;

use App\Entity\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\RateCurrencyRequest;
use App\Services\CurrencyRepository;
use Illuminate\Http\JsonResponse;

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
     * @param int                 $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateRate(RateCurrencyRequest $request, $id): JsonResponse
    {
        $saved = $this->currencyRepository->updateRate($request, $id);
        if (!$saved) {
            return response()->json(['Rate was not updated'], 404);
        }

        return response()->json(['Rate was successfully updated'], 202);
    }
}
