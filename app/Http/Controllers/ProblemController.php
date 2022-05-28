<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use App\Models\Problem;
use App\Models\Solution;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProblemController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view( 'admin.problem.index' )->with( [
            'problems' => Problem::orderBy( 'name', 'ASC' )->paginate( 15 ),
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'admin.problem.create' )->with( [
            'categories' => Category::where( 'user_id', Auth::id() )->orderBy( 'name', 'ASC' )->get(),
            'tags'       => Tag::where( 'user_id', Auth::id() )->orderBy( 'name', 'ASC' )->get(),
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
            'name'        => ['required', 'max:255', 'string'],
            'visibility'  => ['required', 'not_in:none'],
            'category_id' => ['required', 'not_in:none'],
        ] );

        $problem = Problem::create( [
            'name'        => $request->name,
            'slug'        => Str::slug( $request->name ),
            'description' => $request->description,
            'visibility'  => $request->visibility,
            'user_id'     => Auth::id(),
            'category_id' => $request->category_id,
        ] );

        $problem->tags()->attach( $request->tags );

        if ( !empty( $request->file( 'thumbnails' ) ) ) {
            foreach ( $request->thumbnails as $thumb ) {
                $image = time() . '-' . $thumb->getClientOriginalName();
                // save image
                $thumb->storeAs( 'public/uploads', $image );
                // Storage::put('public/uploads', $image);

                // create Media
                Media::create( [
                    'name'       => $image,
                    'user_id'    => Auth::id(),
                    'problem_id' => $problem->id,
                ] );

            }
        }

        // activity event Fire

        return redirect()->route( 'problem.index' )->with( 'success', 'New Entry Created Successfully' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function show( Problem $problem ) {

        return view( 'admin.problem.show' )->with( [
            'problem'   => $problem,
            'solutions' => Solution::where( 'problem_id', $problem->id )->where( 'user_id', Auth::id() )->latest()->get(),
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function edit( Problem $problem ) {
        return view( 'admin.problem.edit' )->with( [
            'problem'    => $problem,
            'categories' => Category::where( 'user_id', Auth::id() )->orderBy( 'name', 'ASC' )->get(),
            'tags'       => Tag::where( 'user_id', Auth::id() )->orderBy( 'name', 'ASC' )->get(),
        ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Problem $problem ) {
        $request->validate( [
            'name'        => ['required', 'max:255', 'string'],
            'visibility'  => ['required', 'not_in:none'],
            'category_id' => ['required', 'not_in:none'],
        ] );

        $problem->update( [
            'name'        => $request->name,
            'slug'        => Str::slug( $request->name ),
            'description' => $request->description,
            'visibility'  => $request->visibility,
            'user_id'     => Auth::id(),
            'category_id' => $request->category_id,
        ] );

        $problem->tags()->sync( $request->tags );

        if ( !empty( $request->file( 'thumbnails' ) ) ) {

            $thumbs = Media::where( ['problem_id' => $problem->id, 'user_id' => Auth::id()] )->get();
            foreach ( $thumbs as $thumb ) {
                $image = $thumb->name['fileName'];
                // dd($thumb);
                // dd($thumb->name->fileName);
                // Storage::delete('public/uploads/' . $thumb->name);
                Storage::delete( 'public/uploads/' . $image );
                Media::find( $thumb->id )->delete();
            }

            foreach ( $request->thumbnails as $thumb ) {
                $image = time() . '-' . $thumb->getClientOriginalName();
                Storage::delete( 'public/uploads' );
                // save image
                $thumb->storeAs( 'public/uploads', $image );
                // Storage::put('public/uploads', $image);

                // create Media
                Media::create( [
                    'name'       => $image,
                    'user_id'    => Auth::id(),
                    'problem_id' => $problem->id,
                ] );

            }
        }

        return redirect()->route( 'problem.index' )->with( 'success', 'Problem Updated' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function destroy( Problem $problem ) {
        // $thumbs = Media::where( ['problem_id' => $problem->id, 'user_id' => Auth::id()] )->get();
        // foreach ( $thumbs as $thumb ) {
        //     $image = $thumb->name['fileName'];
        //     Storage::delete( 'public/uploads/' . $image );
        //     Media::find( $thumb->id )->delete();
        // }
        // dd($problem->id);
        $solution = Solution::get();

        $thumbs = Media::where( ['solution_id' => $solution->id, 'user_id' => Auth::id()] )->get();

        foreach ( $thumbs as $thumb ) {
            $image = $thumb->name['fileName'];
            Storage::delete( 'public/uploads/' . $image );
            Media::find( $thumb->id )->delete();
        }

        $problem->delete();

        return redirect()->route( 'problem.index' )->with( 'success', 'Problem Deleted!' );
    }
}
