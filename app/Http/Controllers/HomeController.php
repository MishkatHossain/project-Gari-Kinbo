<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return view ('home.index')
        ->with('name', 'Jack Ma')
        ->with('Mame', 'Ye long Ma')
        ->with('job', '<b>Developer</b>')
        ;
    }


}
