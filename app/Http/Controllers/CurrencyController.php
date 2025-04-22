<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function convert(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|gt:0',
            'currency' => 'required|string|size:3'
        ]);

        $amount = $request->input('amount');
        $toCurrency = strtoupper($request->input('currency'));

        $apiKey = $apiKey = env('EXCHANGERATE_API_KEY'); 
        $baseCurrency = 'USD'; 
        $url = "https://v6.exchangerate-api.com/v6/{$apiKey}/pair/{$baseCurrency}/{$toCurrency}/{$amount}";

        try {
            $response = Http::get($url);

            if ($response->successful() && isset($response['conversion_result'])) {
                $convertedAmount = $response['conversion_result'];

                return redirect()->back()->with('currency_result', "{$amount} {$baseCurrency} = {$convertedAmount} {$toCurrency}");
            } else {
                return redirect()->back()->with('currency_result', 'Currency conversion failed.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('currency_result', 'Error contacting currency service.');
        }
    }
}
