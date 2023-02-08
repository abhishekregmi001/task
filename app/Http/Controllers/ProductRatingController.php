<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductRating;
use Illuminate\Http\Request;

class ProductRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new ProductRating();
        $data->name=$request->name;
        $data->title=$request->title;
        $data->desc=$request->desc;
        $data->rating=$request->rating;
        $data->product_id=$request->product;
        $data->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductRating  $productRating
     * @return \Illuminate\Http\Response
     */
    public function show(ProductRating $productRating)
    {
        return view('rating.show')->with('data',$productRating);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductRating  $productRating
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductRating $productRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductRating  $productRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductRating $productRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductRating  $productRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductRating $productRating)
    {
        //
    }
    public function proDetail($id)
    {
        $data=Product::find($id);
        return view('rating.show')->with('data',$data);
    }
}
