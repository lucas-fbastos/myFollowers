<?php

namespace App\Service;
use Illuminate\Support\Facades\Http;
class InstagramService{


    public static function requestUserData(String $userName){
        $endpoint = "https://www.instagram.com/$userName?__a=1";
        

        $response = Http::get($endpoint);
        $statusCode = $response->status();
        $content = $response->json();
        //ok status
        if($statusCode  === 200){
           return $content;
        }
        return null;
    }
}