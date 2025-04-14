<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class CreateController extends Controller
{
    public function index(){
        return view('post.create');
    }
    public function create(Request $request){
        //$article = Article::find(id: $request->input('create'))->id;
        Article::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);
        return redirect('/');
    }
}
