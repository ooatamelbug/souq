<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Depart;
use App\Http\Resources\Depart as ResourcesDepart;

class departController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesDepart::collection(Depart::all());
    }

  /*  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function create()
    {
        //
    }
*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //$product = $request->isMatch('put') ? Depart::find($request->departid) : new Depart ;
      $product = new Depart ;
       $product->id = $request->input('productid');
       $product->name = $request->input('name');
       $product->pice = $request->input('pice');
       $product->forpart = $request->input('part');
       $product->fordepart = $request->input('depart');

       if($product->save()){
           return ProductsResource::collection(products::all());
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

      return new ResourcesDepart(Depart::findOrFail($id));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function edit($id)
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
  /*  public function update(Request $request, $id)
    {
        //
    }
*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return  $depart = Depart::findOrFail($id);

      if ($product->delete()) {
          return ResourcesDepart::collection(Depart::All());
      }
    }
}
