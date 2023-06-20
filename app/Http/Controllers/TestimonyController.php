<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = Testimony::all();

        return view("testimonies.index", compact("testimonies"));
    }

    public function testimoniesHome()
    {
        $testimonies = Testimony::where("is_show_dashboard", "1")->get();

        return view("home", compact("testimonies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Testimony::create([
            "name" => $request->name,
            "description" => $request->description,
            "category" => $request->category
        ]);

        return redirect()->back()->with("alert", "Testimoni berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(Testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Testimony::where("id", "=", $request->testimony_id)->update([
            "name" => $request->name,
            "description" => $request->description,
            "is_show_dashboard" => $request->is_show_dashboard,
        ]);

        return redirect()->back()->with("alert", "Data testimony berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimony::where("id", "=", $id)->delete();

        return redirect()->back()->with("alert", "Data testimony berhasil dihapus!");
    }
}
