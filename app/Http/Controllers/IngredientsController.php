<?php

namespace App\Http\Controllers;

use App\Models\Ingredients;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index(){
        return view('search',[
            'ingredients' => Ingredients::latest()->filter(request(['search']))->get()
        ]);
    }
}
