<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //
    public function r101()
    {
        return view('recipes.r101');
    }

    //
    public function r106()
    {
        return view('recipes.r106');
    }

    public function r201()
    {
        alert()->success('This is our Recipe 201 page',
            'To show a recipe works(Recipe 201)')->persistent('Close');
        return view('recipes.r201');
    }
    public function r202()
    {
        return view('recipes.r202');
    }
}
