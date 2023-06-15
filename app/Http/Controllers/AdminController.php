<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();

        return view("admins.index", compact("admins"));
    }


    public function login(Request $request)
    {
        $admin = Admin::where("email", "=", $request->email)->first();

        if ($admin == null) {
            return redirect()->back()->with("alert", "User tidak ditemukan!");
        }
        if (!Hash::check($request->password, $admin->password)) {
            return redirect()->back()->with("alert", "Password tidak valid!");
        }

        Session::put("isLogin", true);
        Session::put("adminName", $admin->name);

        return redirect("/admin/customers");
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
        $admin = Admin::where("email", "=", $request->email)->first();

        if ($admin) {
            return redirect()->back()->with("alert", "Email sudah digunakan!");
        }
        // if (!Hash::check($request->password, $admin->password)) {
        //     return redirect()->back()->with("alert", "Password tidak valid!");
        // }
        Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return redirect()->back()->with("alert", "Data admin berhasil ditambah!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //user old
        $admin = Admin::where("email", "=", $request->email)->first();

        if ($admin) {
            return redirect()->back()->with("alert", "Email sudah digunakan!");
        }

        $adminUpdate = Admin::where("id", "=", $request->admin_id)->first();

        $adminUpdate->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return redirect()->back()->with("alert", "Data admin berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::where("id", "=", $id)->delete();
        return redirect()->back()->with("alert", "Data admin berhasil dihapus!");
    }
}
