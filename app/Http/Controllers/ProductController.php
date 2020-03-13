<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('libros',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "title" => "required|string|min:3",
            "price" => "required|numeric",
            "description" => "required|max:280",
            "avatar" => "required|mimes:jpeg,jpg,png,gif|max:10000",
        ],[
            "required" => "El campo es obligatorio.",
            "numeric" => "Debe ingresar números.",
            "max" => "La imagen no puede superar los 10 MB.",
            "mimes" => "El formato de la imagen debe ser jpeg,jpg,png,gif."
        ]);
        
        $rutaimg = $request->file("avatar")->store("/products");
        $nuevoProducto = new Product;
        $nuevoProducto->title = $request->title;
        $nuevoProducto->price = $request->price;
        $nuevoProducto->description = $request->description;
        $nuevoProducto->avatar = $rutaimg;
        $nuevoProducto->save();

        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $products = Product::find($id);
        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $this->validate($request,[
            "name" => "required|string|min:3",
            "price" => "required|numeric",
            "desc" => "required|max:280",
            "avatar" => "required|mimes:jpeg,jpg,png,gif|max:10000",
        ],[
            "required" => "El campo es obligatorio.",
            "price" => "Debe ingresar números.",
            "max" => "La imagen no puede superar los 10 MB.",
            "mimes" => "El formato de la imagen debe ser jpeg,jpg,png,gif."
        ]);

        $nuevoProducto = new Product;
        $nuevoProducto->title = $request->title;
        $nuevoProducto->price = $request->price;
        $nuevoProducto->description = $request->description;
        $nuevoProducto->avatar = $request->avatar;
    
        $nuevoProducto->save();

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
