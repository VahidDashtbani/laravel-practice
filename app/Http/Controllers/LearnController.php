<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class LearnController extends Controller
{

    public function learn(){
        return view("master");

    }
}
