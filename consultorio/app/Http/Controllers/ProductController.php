<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ProductType;
use App\Product;
use Redirect;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request) {

        $products = Product::search($request->input('reference-inventory'), $request->input('name-inventory'), $request->input('type-inventory'), $request->input('status-inventory'))->get();
        $productTypes = ProductType::all();

        return view('cstr-su.inventory', ['products' => $products, "types" => $productTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $productTypes = ProductType::all();

        return view('cstr-su.new_inventory', ["message" => "Crear Nuevo Elemento de Inventario", "types" => $productTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        /*$process = $request->input('product-process');

        if ($process != 0) {
            
        }*/

        $product = new Product();
        $product->name = $request->input('name-inventory');
        $product->warranty = $request->input('warranty-inventory');
        $product->product_type_id = $request->input('inventory-type');
        $product->status = $request->input('status-inventory');
        $product->observation = $request->input('description-inventory');
        $product->reference = $request->input('reference-inventory');

        $product->save();
        //dd($product);
        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $productTypes = ProductType::all();
        
        $product = Product::find($id);
        return view('cstr-su.new_inventory', ["message" => "Editar Elemento de Inventario", "types" => $productTypes, "product" => $product]);
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
        $product = Product::find($id);
        $product->name = $request->input('name-inventory');
        $product->warranty = $request->input('warranty-inventory');
        $product->product_type_id = $request->input('inventory-type');
        $product->status = $request->input('status-inventory');
        $product->observation = $request->input('description-inventory');
        $product->reference = $request->input('reference-inventory');

        $product->save();
        return redirect()->action('ProductController@index');
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
    }
}
