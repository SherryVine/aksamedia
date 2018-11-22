<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
      $data['categories'] = Category::all();
      return view('pages.article_input', $data);
    }

    public function article_inputPost(Request $request){
      $messages = [
        'required' => 'Kolom :attribute wajib diisi',
        'max' => ':attribute maksimal :max karakter',
      ];

      $validated = \Validator::make($request->all(), [
        'categories' => 'required',
        'title' => 'required|max:255',
        'body' => 'required'
      ], $messages)->validate();

      $create = Article::create($validated);
      $create->category()->sync($request->input('categories'));

      return redirect()->route('article.result');
    }

    public function article_data(){
      $data['articles'] = Article::all();
      $data['no'] = 0;
      return view('pages.table_articles', $data);
    }

    public function category_data(){
      $data['categories'] = Category::all();
      $data['no'] = 0;
      return view('pages.table_categories', $data);
    }
}
