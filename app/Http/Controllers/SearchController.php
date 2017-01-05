<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResults(Request $request){
        $query = $request->input('query');
        if(!$query){
            return redirect()->route('home');
        }

        $users = User::where( DB::raw("concat(first_name,' ', last_name)"),'like',"%{$query}%")
                        ->orWhere('username','like',"%{$query}%")->get();

        return view('search.results')->with('users',$users);
    }
}
