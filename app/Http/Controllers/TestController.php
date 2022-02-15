<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function home()
    {

        $categories = Category::all();
        //  dd($categories);
        return view('welcome', compact('categories'));
    }
    public function index()
    {
        return view('test');
    }

    public function indexparametre($name)
    {

        return view('testparametre', ['name' => $name]);
        //return view('testparametre', compact('name'));
    }


    public function getform()
    {
        return view('form');
    }

    public function submitform(Request $request)
    {
        $champ1 = $request->champ1;
        $champ2 = $request->champ2;
        dd([$champ1, $champ2]);
    }
}
