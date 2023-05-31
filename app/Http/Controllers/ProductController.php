<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *@param  \Illuminate\Http\Request  $request
     */
    public function index(Request $request)
    {
        $search = $request->query('type');
        //dd($request->query('type'));
        if ($search) {
            $products = Product::where('type', $search)->get();
        } else {
            $products = Product::all();
        }
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
    public function store(StoreProductRequest $request)
    {
        //dd($request->all());
        // $request->validate([
        //     'title' => 'required|max:255|min:3',
        //     'image' => 'required|max:255'
        // ]);

        $form_data = $request->validated();
        //$form_data = $this->validation($request->all());
        //$form_data = $request->all();
        // $newProduct = new Product();

        //senza fill
        // $newProduct->title = $form_data['title'];
        // $newProduct->image = $form_data['image'];
        // $newProduct->type = $form_data['type'];
        // $newProduct->cooking_time = $form_data['cooking_time'];
        // $newProduct->weight = $form_data['weight'];
        // $newProduct->description = $form_data['description'];

        //con fill
        //$newProduct->fill($form_data);

        //$newProduct->save();

        $newProduct = Product::create($form_data);
        return redirect()->route('products.index')->with('message', "Il prodotto con id {$newProduct->id} è stato salvato con successo");
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
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // $request->validate([
        //     'title' => 'required|max:255|min:3',
        //     'image' => 'required|max:255'
        // ]);
        $form_data = $request->validated();
        //dd($form_data);
        //$product = Product::findOrFail($id);
        $product->update($form_data);
        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Product $product)
    {
        //$product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('message', "Products with id: {$product->id} cancellato con successo !");
    }

    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|max:255|min:3',
            'image' => 'required|max:255'
        ], [
                'title.required' => "Il titolo è obbligatorio",
                'title.max' => "Il tittolo non deve supeerare 255 caratteri",
                'title.min' => "Iltitolo deve contenere almano 3 caratteri",
                'image.required' => "Devi inserire la url di una immagine",
                'image.max' => "La url dell'immagine deve essere di massimo 255 caratteri"

            ])->validate();
        return $validator;

    }
}