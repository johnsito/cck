<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class TestController extends Controller
{
    public function index(){
        $data = ['uno','dos','tres','cuatro'];
        return Inertia::render('Test/TestComponent',['data' => $data]);
    }
}
