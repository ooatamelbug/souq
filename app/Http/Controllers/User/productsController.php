<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\products;
use App\Http\Resources\Admin\Products as ProductsResource;

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
      if ($request->isMerhod('post')) {
        $request->validate([
          'name' => 'require|string|max:100',
          'price' => 'require|integer|max:10',
          'part' => 'require|integer|max:10',
          'depart' => 'require|integer|max:10',
        ]);
        $product = new products ;
         $product->pro_name = $request->input('name');
         $product->price = $request->input('price');
         $product->forpart = $request->input('part');
         $product->fordepart = $request->input('depart');
         $product->foruser = auth()->user()->id;

         if($product->save()){
             return ProductsResource::collection(products::all());
         }
      } else {

        return redirect();
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
/*
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function edit($id)
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
      if ($request->isMerhod('put')) {

        $product = products::findOrFail($id);
 ;
         $product->id = $request->input('productid');
         $product->pro_name = $request->input('name');
         $product->price = $request->input('price');
         $product->forpart = $request->input('part');
         $product->fordepart = $request->input('depart');
         $product->foruser = auth()->user()->id;
         if($product->save()){
             return ProductsResource::collection(products::all());
         }

      } else {
        return redirect();
      }
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
