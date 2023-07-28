<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class IndexService
{
    public function __construct()
    {

    }

    public function findIp(string $ip): mixed
    {
        $result = Http::get('https://api.ipgeolocation.io/ipgeo?ip='.$ip.'&apiKey=b7fabc1a19454d04882e99ffb615ce17');
        return json_decode($result);
    }
}
