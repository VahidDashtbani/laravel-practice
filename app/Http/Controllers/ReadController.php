<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ReadController extends Controller
{
    public function index(){
        return view("post.read");
    }public function read(Request $request)
    {
        $article = Article::find($request->input('row'));
    
        if ($article) {
            // حذف مقاله در صورت نیاز
            // Article::destroy($request->input('row'));
    
            $res = Article::where('id', $article->id)->select('name')->first();
            dd($res->name);
            return redirect('/');
    
        ;
        }
    
        
    }
    
}
