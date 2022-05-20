<?php

namespace App\Http\Controllers;
use App\Models\Package;
use Illuminate\Http\Request;

class packageController extends Controller
{
    public function getPackage(){
        return response()->json(Package::all());
    }
}
