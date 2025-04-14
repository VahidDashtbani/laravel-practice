<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function index(){
        return view("post.destroy");
    }
    
    public function destroy(Request $request){
        $article = Article::find(id: $request->input('row'))->id;
        
         if ($article) {
            Article::destroy($request->input('row'));
        }
         return redirect("/")->with('message','حذف شد.');
         
    }
    
}
