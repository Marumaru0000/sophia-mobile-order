<?php

#use Illuminate\Support\Facades\Route;

#Route::get('/', function () {
    #return view('welcome');
#});
use Illuminate\Support\Facades\Route;

// セルフオーダーシステムのトップページとしてQRコードの表示ページを設定
Route::view('/', 'ordering::help');
Route::get('/test-microcms', function () {
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', env('ORDERING_MICROCMS_ENDPOINT'), [
        'headers' => [
            'X-API-KEY' => env('ORDERING_MICROCMS_API_KEY'),
        ],
    ]);

    return json_decode($response->getBody(), true);
});