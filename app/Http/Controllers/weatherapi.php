<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class weatherapi extends Controller
{
    public function getCurrentWeather(Request $request)
    {
        $apiKey = 'fe7c1767145d44a84baba84f11806d38'; // Replace with your actual API key from OpenWeatherMap
        $city=$request->city;
        $client = new Client();
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city},inCA&appid=fe7c1767145d44a84baba84f11806d38";
        $url1= "http://api.openweathermap.org/data/2.5/weather?q={$city},in&appid={$apiKey}";
        
        try {
            $response = $client->get($url);
            $weatherData = json_decode($response->getBody());
            //dd($weatherData->main);
            // Retrieve the required weather information from $weatherData and process as needed
            
            // Example: Retrieving temperature
            $temperature = ($weatherData->main->temp)-273.15;
            $feels_like = ($weatherData->main->feels_like)-273.15;
            $temp_min = ($weatherData->main->temp_min)-273.15;
            $temp_max = ($weatherData->main->temp_max)-273.15;
            $pressure = ($weatherData->main->pressure);
            $humidity = ($weatherData->main->humidity);
            
          
            return view('display_weather',['temperature'=> $temperature,
            'feels'=>$feels_like,
            'min'=>$temp_min,
            'max'=>$temp_max,
            'pressure'=> $pressure,
            'humidity'=>$humidity,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' =>$e->getMessage()]);
        }
    }

}
