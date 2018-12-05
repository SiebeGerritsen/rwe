<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){

        return view('welcome');

    }

    public function puntenInvoer(){

        return view('puntenInvoer');

    }

    public function leaderbord(){

        $scores = [
            'siebe',
            '0'
        ];

        return view("leaderbord", [
            'scores' => $scores
        ]);

    }
}
