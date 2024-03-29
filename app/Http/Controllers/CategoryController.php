<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view( 'admin.category.index' )->with( [
            'categories' => Category::orderBy( 'name', 'ASC' )->paginate( 5 ),
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'admin.category.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {

        $request->validate( [
            'name' => ['required', 'max:255', 'string'],

        ] );

        Category::create( [
            'name' => $request->name,
            'slug' => Str::slug( $request->name ),
        ] );

        return redirect()->route( 'category.index' )->with('success', 'Category Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show( Category $category ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit( Category $category ) {
        return view( 'admin.category.edit' )->with( [
            'category' => $category,
        ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Category $category ) {
        $request->validate( [
            'name' => ['required', 'max:255', 'string'],

        ] );

        $category->update( [
            'name' => $request->name,
            'slug' => Str::slug( $request->name ),
        ] );

        return redirect()->route( 'category.index' )->with('success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( Category $category ) {
        $category->delete();

        return redirect()->route( 'category.index' )->with('success', 'Category Deleted');
    }
}
