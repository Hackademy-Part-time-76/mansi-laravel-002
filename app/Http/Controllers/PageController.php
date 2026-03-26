<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public static $services = [
        ['id' => 1, 'nome' => 'Sito Web Digitali', 'image' => 'https://picsum.photos/id/23/200/200'],
        ['id' => 2, 'nome' => 'eCommerce Web', 'image' => 'https://picsum.photos/id/21/200/200'],
        ['id' => 3, 'nome' => 'Consulenza Informatica', 'image' => 'https://picsum.photos/id/3/200/200'],
    ];

    public function homepage()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        //$services = ['siti', 'ecommerce', 'consulenza'];

        return view('services', ['services' => self::$services]);
    }

    public function service($service)
    {

        foreach (self::$services as $s) {
            if ($service == $s['id']) {
                return view('service', ['ciccio' => $s]);
            }
        }
        abort(404);
        //ricerca nell'array

    }
}
