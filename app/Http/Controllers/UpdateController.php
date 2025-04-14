<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class UpdateController extends Controller
{
    public function index(){
        return view("post.update");
    }
    public function update(Request $request){
    $article = Article::find($request->input('row'));
            //dd($article);
            if($article){
                $article->update([
                    'name' => $request->input('name'),
                    'slug' => $request->input('slug'),
                ]);
            }
            return redirect("/")->with('message','good');
    }
}
