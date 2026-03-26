<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chi-siamo', function () {
    return view('about');
});
Route::get('/servizi', function () {
    //$services = ['siti', 'ecommerce', 'consulenza'];
    $services = [
        ['id' => 1, 'nome' => 'Sito Web', 'image' => 'https://picsum.photos/id/23/200/200'],
        ['id' => 2, 'nome' => 'eCommerce Web', 'image' => 'https://picsum.photos/id/21/200/200'],
        ['id' => 3, 'nome' => 'Consulenza Informatica', 'image' => 'https://picsum.photos/id/3/200/200'],
    ];
    return view('services', ['services' => $services]);
});
Route::get('/servizi/{service}', function ($service) {
    $services = [
        ['id' => 1, 'nome' => 'Sito Web', 'image' => 'https://picsum.photos/id/23/200/200'],
        ['id' => 2, 'nome' => 'eCommerce Web', 'image' => 'https://picsum.photos/id/21/200/200'],
        ['id' => 3, 'nome' => 'Consulenza Informatica', 'image' => 'https://picsum.photos/id/3/200/200'],
    ];

    foreach ($services as $s) {
        if ($service == $s['id']) {
            return view('service', ['ciccio' => $s]);
        }
    }
    abort(404);
    //ricerca nell'array

});
