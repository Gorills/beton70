<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class BetonController extends Controller
{
    public function index() {

        return view('index', [

            'categories' =>Category::all()

        ]);

    }
}
