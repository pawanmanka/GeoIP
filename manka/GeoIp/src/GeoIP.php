<?php

namespace Manka\GeoIP;

use Illuminate\Support\Facades\Http;

class GeoIP
{
    public function lookup(string $ip = null): array
    {
        $ip = $ip ?? request()->ip();

        $response = Http::get("http://ip-api.com/json/{$ip}");

        if ($response->successful()) {
            return $response->json();
        }

        return [
            'status' => 'fail',
            'message' => 'Unable to retrieve location.'
        ];
    }
}
