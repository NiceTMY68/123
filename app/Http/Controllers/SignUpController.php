<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
//    public function index($method, $parameters)
//    {
//        return parent::callAction($method, $parameters); // TODO: Change the autogenerated stub
//    }

    public function index()
    {
//        $animal = Zoo::getAllAnimal();
        return view('Zoo.CustomerView.customerSignUp');
//            [
//                'animal' => $animal,
//            ]);
    }
}