<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $form_data = $request->all();
        $newProduct = new Product();
        // $newProduct->title = $form_data['title'];
        // $newProduct->image = $form_data['image'];
        // $newProduct->type = $form_data['type'];
        // $newProduct->cooking_time = $form_data['cooking_time'];
        // $newProduct->weight = $form_data['weight'];
        // $newProduct->description = $form_data['description'];
        $newProduct->fill($form_data);
        $newProduct->save();
        return redirect()->route('products.show', $newProduct->id);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show(Product $product)
    {
        //$product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
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
     *
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy($id)
    {
        //
    }
}