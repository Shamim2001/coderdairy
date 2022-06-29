<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Problem;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SolutionController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view( 'admin.solution.index' )->with( [
            'solutions' => Solution::where( 'user_id', Auth::id() )->latest()->paginate( 10 ),
        ] );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'admin.solution.create' )->with( [
            'problems' => Problem::where( 'user_id', Auth::id() )->orderBy( 'name', 'ASC' )->get(),
        ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $request->validate( [
            'solution' => ['required'],
        ] );

        $solution = Solution::create( [
            'content'    => $request->solution,
            'problem_id' => $request->problem_id,
            'user_id'    => Auth::id(),
        ] );

        if ( !empty( $request->file( 'thumbnails' ) ) ) {
            foreach ( $request->thumbnails as $thumb ) {
                $image = time() . '-' . $thumb->getClientOriginalName();
                // save image
                $thumb->storeAs( 'public/uploads', $image );
                // Storage::put('public/uploads', $image);

                // create Media
                Media::create( [
                    'name'        => $image,
                    'user_id'     => Auth::id(),
                    'solution_id' => $solution->id,
                ] );

            }
        }

        // activity event Fire

        return redirect()->route( 'solution.index' )->with( 'success', 'New Solution Created Successfully' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show( Solution $solution ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit( Solution $solution ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Solution $solution ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy( Solution $solution ) {
        $thumbs = Media::where( ['solution_id' => $solution->id, 'user_id' => Auth::id()] )->get();

        foreach ( $thumbs as $thumb ) {
            $image = $thumb->name['fileName'];
            Storage::delete( 'public/uploads/' . $image );
            Media::find( $thumb->id )->delete();
        }

        $solution->delete();

        return view( 'admin.solution.index' )->with( 'success', 'Solution Deleted!' );
    }
}
