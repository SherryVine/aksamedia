<?php

namespace App\Http\Controllers;

use App\profile_detail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_inputPost(Request $request){
      $messages = [
        'required' => 'Kolom :attribute wajib diisi',
        'email' => 'Format email anda salah',
        'min' => ':attribute minimal :min karakter',
        'max' => ':attribute maksimal :max karakter',
        'date' => 'Format date pada kolom :attribute salah'
      ];

      $validated = \Validator::make($request->all(), [
        'name' => 'required|min:4|max:16',
        'gender' => 'required',
        'email' => 'required|email',
        'placebirth' => 'required|min:4|max:16',
        'datebirth' => 'required|date',
        'address' => 'nullable|min:4|max:64',
        'motto' => 'nullable|max:128',
      ], $messages)->validate();

      $create = profile_detail::create($validated);
      return redirect()->route('result');
    }

    public function data_result(){
      $data['results'] = profile_detail::all();
      $data['no'] = 0;
      return view('pages.tables', $data);
    }
}
