<?php

namespace App\Http\Controllers;

use App\Repository\AnimalRepos;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        $animal = AnimalRepos::getAllAnimalsWithCategories();
        return view('Zoo.clientView.index',
            [
                'animal' => $animal,
            ]);    }


}
