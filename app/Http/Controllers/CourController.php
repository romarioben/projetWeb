<?php

namespace App\Http\Controllers;

use App\Models\cour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class CourController extends Controller
{
    //

    public function index(){
        $cours = cour::all();
        return View::make('cours')->with('cours', $cours);
    }
}