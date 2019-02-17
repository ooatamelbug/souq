<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\products;
use App\Http\Resources\Products as ProductsResource;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = products::orderby('created_at','desc')->paginate(40);
        return ProductsResource::collection($Products);
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
       $product = $request->isMatch('put') ? products::find($request->productid) : new products ;
        $product->id = $request->input('productid');
        $product->name = $request->input('name');
        $product->pice = $request->input('pice');
        $product->forpart = $request->input('part');
        $product->fordepart = $request->input('depart');
        
        if($product->save()){
            return ProductsResource::collection(products::All());   
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = products::findOrFail($id);
        return new ProductsResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = products::findOrFail($id);

        if ($product->delete()) {
            return ProductsResource::collection(products::All());
        }
    }
}
