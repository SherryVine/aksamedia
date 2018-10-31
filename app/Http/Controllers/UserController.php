<?php

namespace App\Http\Controllers;

use App\profile_detail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_inputPost(Request $request){
      $data = $request->all();
      $create = profile_detail::create($data);
      return redirect()->route('result');
    }

    public function data_result(){
      $data['results'] = profile_detail::all();
      $data['no'] = 0;
      return view('pages.tables', $data);
    }
}
