<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\ProductType;
use App\Product;
use Redirect;
use Excel;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request) {

        $products = Product::search($request->input('reference-inventory'), $request->input('name-inventory'), $request->input('type-inventory'), $request->input('status-inventory'))->paginate(5);
        $productTypes = ProductType::all();
        // $ids = implode(',', $products->pluck('id')->toArray());
        //Modify controller
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
        $product->quantity = $request->input('quantity-inventory');
        $product->trademark = $request->input('trademark-inventory');
        $product->presentation = $request->input('presentation-inventory');

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
    public function show(Request $request, $id) {
        
        $product = Product::find($id);
        $product_type = $product->product_type->name_type;
        $product_status = $product->getStatus();
        $product_presentation = $product->getPresentation();

        if($request->ajax()){
            return Response::json(['product' => $product, 'type' => $product_type, 'status' => $product_status, 'presentation' => $product_presentation],201);
         }
        
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
        $product->quantity = $request->input('quantity-inventory');
        $product->trademark = $request->input('trademark-inventory');
        $product->presentation = $request->input('presentation-inventory');

        $product->save();
        return redirect()->action('ProductController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $product = Product::find($request->input('product_id'));
        $deleted = $product->delete();

        return redirect()->route('inventario.index');

        /*if($request->ajax()){
            return Response::json(['deleted' => $deleted],201);
         }*/
    }

    public function exportProductsToExcel() {
        
        $products = Product::all();

        Excel::create('lista_inventario', function($excel) use($products) {
           
           $excel->sheet('listado', function ($sheet) use($products) {
               
               $sheet->appendRow( array('Inventario ID', 
                            'REFERENCIA', 
                            'NOMBRE', 'GARANTIA', 
                            'TIPO INVENTARIO', 
                            'ESTADO', 'CANTIDAD', 
                            'MARCA', 
                            'PRESENTACION', 
                            'OBSERVACION') );
               $sheet->row(1, function ($row) {
                   
                   $row->setFontWeight('bold');
                   
               });
               
               foreach ($products as $product) {
                   $sheet->appendRow( array($product->id, 
                                $product->reference,
                                $product->name,
                                $product->warranty,
                                $product->product_type->name_type,
                                $product->getStatus(),
                                $product->quantity,
                                $product->trademark,
                                $product->getPresentation(),
                                $product->observation) );
               }
               
                              
           });

           //$excel->set{$PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00}();
           
       })->download('xls');

    }

}
