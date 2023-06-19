<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Testimony;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanans = Layanan::all();

        return view("layanan.index", compact("layanans"));
    }

    public function index2()
    {
        $ketik = Layanan::where("category", "=", "ketik");
        $cetak = Layanan::where("category", "=", "cetak");
        $jilid = Layanan::where("category", "=", "jilid");

        $testimonies = Testimony::where("category", "=", "laptop")->get();


        return view("layanan.index_user", compact("ketik", "cetak", "jilid", "testimonies"));
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
        $image = $request->file('layanan_photo');
        $image_name = time() . "." . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/layanan_photo');
        $image->move($destinationPath, $image_name);

        Layanan::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "photo" => $image_name,
            "category" => $request->category,
        ]);

        return redirect()->back()->with("alert", "Data layanan berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $layanan = Layanan::where("id", "=", $request->laptop_id);
        $image = $request->file('layanan_photo');
        $image_name = "";

        if ($request->layanan_photo != null) {
            $image_name = time() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/layanan_photo');
            $image->move($destinationPath, $image_name);

            $old_image = $layanan->first()->photo;
            $image = public_path('uploads/layanan_photo/') . $old_image;
            if (file_exists($image)) @unlink($image);
        } else {
            $image_name = $layanan->first()->photo;
        }

        $layanan->update([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "photo" => $image_name,
            "is_available" => $request->is_available,
            "category" => $request->category,
        ]);

        return redirect()->back()->with("alert", "Data layanan berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::where("id", "=", $id);

        $fileName = $layanan->first()->photo;

        $image = public_path('uploads/layanan_photo/') . $fileName;

        if (file_exists($image)) @unlink($image);

        $layanan->delete();
        return redirect()->back()->with('alert', 'Data layanan berhasil dihapus!');
    }
}
