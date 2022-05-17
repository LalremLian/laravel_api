<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//This one is for model..must have to asign a model here......................
use App\Models\User;
use App\Models\FinalModel;
use Illuminate\Support\Facades\DB;

class dummyApi extends Controller
{
    //Funtions 
    function getData()
    {
        return 
        [
            "name" => "calvert",
            "email" => "calvert@gmail.com",
            "address" => "bangladesh"
        ];
    }

    function getUser()
    {
        $data = User::latest()->get();
        return $data;
    }

    function getFinalModel()
    {
        $data = FinalModel::latest()->get();
        return $data;
    }
}
