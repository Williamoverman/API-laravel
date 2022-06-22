<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \GuzzleHttp\Client;
use Illuminate\Http\Client\Response;

class fetchAPIcontroller extends Controller
{
    public static function getRequest($link) {
        $request = Http::get($link);
        $object = $request->json();
        return $object;
    }
}
