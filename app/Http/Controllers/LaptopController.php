<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use App\Models\Testimony;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = Laptop::all();

        return view("laptop.index", compact("laptops"));
    }

    public function index2()
    {
        $laptops = Laptop::where("category", "=", "laptop")->get();
        $services = Laptop::where("category", "=", "service")->get();
        $sperparts = Laptop::where("category", "=", "sperpart")->get();

        $testimonies = Testimony::where("category", "=", "laptop")->get();

        return view("laptop.index_user", compact("laptops", "services", "sperparts", "testimonies"));
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
        $images = $request->file('laptop_photo');

        $files = [];
        foreach ($images as $image) {
            $image_name = time() . "_" . $image->getClientOriginalName();
            $destinationPath = public_path('/uploads/laptop_photo');
            $image->move($destinationPath, $image_name);
            $files[] = $image_name;
        }

        Laptop::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "photo" => implode("|", $files),
            "category" => $request->category,
        ]);


        return redirect()->back()->with("alert", "Data leptop berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        $laptop = Laptop::where("id", "=", $request->laptop_id);
        $images = $request->file('laptop_photo');
        $files = [];
        $file_name = "";

        if ($request->laptop_photo != null) {
            foreach ($images as $image) {
                $image_name = time() . "_" . $image->getClientOriginalName();
                $destinationPath = public_path('/uploads/laptop_photo');
                $image->move($destinationPath, $image_name);


                $old = $laptop->first()->photo;
                $old_images = explode("|", $old);
                foreach ($old_images as $old_image) {
                    $image = public_path('uploads/laptop_photo/') . $old_image;
                    if (file_exists($image)) @unlink($image);
                }
                $files[] = $image_name;
            }
        } else {
            $file_name = $laptop->first()->photo;
        }

        if (count($files) > 0) {
            $file_name = implode("|", $files);
        }

        $laptop->update([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "is_available" => $request->is_available,
            "photo" => $file_name,
            "category" => $request->category,
        ]);

        return redirect()->back()->with("alert", "Data leptop berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laptop = Laptop::where("id", "=", $id);
        $fileName = $laptop->first()->photo;
        $fileNames = explode("|", $fileName);

        foreach ($fileNames as $fileName) {
            $image = public_path('uploads/laptop_photo/') . $fileName;
            if (file_exists($image)) @unlink($image);
        }

        $laptop->delete();
        return redirect()->back()->with('alert', 'Data laptop berhasil dihapus!');
    }
}
