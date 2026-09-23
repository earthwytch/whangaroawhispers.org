<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class WeatherService
{
    protected ?object $data = null;

    protected function load(): void
    {
        // If already loaded during this request, skip hitting the cache store
        if ($this->data) {
            return;
        }

        $apiData = Cache::remember('weather_data', now()->addMinutes(15), function () {
            $response = Http::get('https://api.weatherapi.com/v1/current.json', [
                'key' => config('services.weatherapi.key'),
                'q' => config('services.weatherapi.location'),
            ]);

            return $response->successful() ? $response->json() : null;
        });

        $this->data = (object) [
            'icon' => $apiData ? 'https:' . ($apiData['current']['condition']['icon'] ?? '') : '',
            'temp' => $apiData['current']['temp_c'] ?? '',
            'condition' => $apiData['current']['condition']['text'] ?? '',
        ];
    }

    // Magic method allows calling $weather->temp directly in Blade
    public function __get(string $key)
    {
        $this->load();
        return $this->data->$key ?? '';
    }
}