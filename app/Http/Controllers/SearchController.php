<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search( Request $request)
    {
        $search = $request->search;
        $users = Problem::where('name', 'LIKE','%'.$search.'%')->get();

        return view('admin.search', compact('users'));

    }
}
