<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function index(){
      $data['category'] = Category::all();
      return view('pages.product_input', $data);
    }

    public function product_inputPost(Request $request){
      $messages = [
        'required' => 'Kolom :attribute wajib diisi',
        'max' => ':attribute maksimal :max karakter',
      ];

      $validated = \Validator::make($request->all(), [
        'category_id' => 'required',
        'product_name' => 'required|max:32',
        'product_description' => 'nullable',
        'price' => 'required',
      ], $messages)->validate();

      $create = Product::create($validated);
      return redirect()->route('product.result');
    }

    public function data_result(){
      $data['product'] = DB::table('products')
                          ->join('categories', 'products.category_id', '=', 'categories.id')
                          ->get();
      $data['no'] = 0;
      return view('pages.table_products', $data);
    }
}
