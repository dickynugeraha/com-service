<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

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

        return view("produk.index", compact("products"));
    }

    public function index2()
    {
        $products = Product::all();

        return view("produk.index_user", compact("products"));
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $image = $request->file('product_photo');
        $image_name = time() . "." . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/product_photo');
        $image->move($destinationPath, $image_name);

        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "photo" => $image_name,
        ]);

        return redirect()->back()->with("alert", "Data produk berhasil ditambah!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request)
    {
        $product = Product::where("id", "=", $request->product_id);
        $image = $request->file('product_photo');
        $image_name = "";

        if ($request->product_photo != null) {
            $image_name = time() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/product_photo');
            $image->move($destinationPath, $image_name);

            $old_image = $product->first()->photo;
            $image = public_path('uploads/product_photo/') . $old_image;
            if (file_exists($image)) @unlink($image);
        } else {
            $image_name = $product->first()->photo;
        }

        $product->update([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "is_available" => $request->is_available,
            "photo" => $image_name,
        ]);

        return redirect()->back()->with("alert", "Data produk berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where("id", "=", $id);

        $fileName = $product->first()->photo;

        $image = public_path('uploads/product_photo/') . $fileName;

        if (file_exists($image)) @unlink($image);

        $product->delete();
        return redirect()->back()->with('alert', 'Data produk berhasil dihapus!');
    }
}
