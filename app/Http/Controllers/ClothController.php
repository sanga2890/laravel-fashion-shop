<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class ClothController extends Controller
{
    public function index() {
        $clothes = Cloth::all();
        return view('clothes', ['clothes_list' => $clothes]);
    }
}
