<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Solution;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class FrontendController extends Controller
{
    public function index()
    {
        // Cache::put('cacheKey', 'This should be a cache key');
        // dd(
        //     Cache::get('cacheKey')
        // );

        return view('frontend.index')->with([
            'problems' => Problem::where('user_id', Auth::id())->limit(6)->get(),
        ]);
    }

    public function problem()
    {
        $problems = Problem::where(['visibility'=>'public','user_id'=>Auth::id()])->get();

        return view('frontend.view')->with([
            'problems' => $problems,
        ]);
    }

    // frontend show
    public function show($id)
    {
        $problems = Problem::find($id);
        $tags = Tag::find($id);

        return view('frontend.show')->with([
            'problems' => $problems,
            'solutions' => Solution::where('problem_id', $problems->id )->get(),
            'tags' => $tags


        ]);
    }

    public function query( Request $request)
    {
        $search = $request->search;
        $queries = Problem::where('name', 'LIKE','%'.$search.'%')->get();

        return view('frontend.query', compact('queries'));

    }
}
