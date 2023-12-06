<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PublicController;


class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::where('is_accepted',true)->orderBy('created_at','desc')->get();
        return view('Articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Articles.create');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    { 
    

    

        Article::create([
    
            'title'=>$request->input('title'),
            'subtitle'=>$request->input('subtitle'),
            'body'=>$request->input('body'),
            'img'=>$request->file('img')->store('public/img'),
            'category_id'=>$request->category,
            'user_id'=>Auth::user()->id,
        ]);
        
        
       

        return redirect (route ('homepage'))->with('message','Articolo inviato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    
    {
        return view('Articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    //! Filter by category

    public function byCategory(Category $category)
    {
        $articles=$category->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted==true;
        });
        return view('Articles.by-category',compact('category','articles'));
    }

     //! Filter by category

     public function byWriter(User $user)
     {
         $articles=$user->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted==true;});
         return view('Articles.by-user',compact('user','articles'));
     }
}
