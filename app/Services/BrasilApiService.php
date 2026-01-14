<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class BrasilApiService
{
    public function buscarPorCep(string $cep): array|null
    {
        $cep = preg_replace('/[^0-9]/', '', $cep);

        if (strlen($cep) !== 8) {
            return null;
        }

        $response = Http::get("https://brasilapi.com.br/api/cep/v2/{$cep}");

        if ($response->successful()) {
            return $response->json();
        }

        return null;

    }
}
