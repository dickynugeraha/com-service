<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        return view("members.index", compact("members"));
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
        $member = Member::where("email", "=", $request->email)->orWhere("phone", "=", $request->phone)->first();

        if ($member != null) {
            return redirect()->back()->with("alert", "Gagal, email atau phone member sudah terdaftar!");
        }

        Member::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);

        return redirect()->back()->with("alert", "Berhasil, data member berhasil ditambah!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $member = Member::where("id", "=", $request->member_id);

        $member->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
        ]);

        return redirect()->back()->with("alert", "Berhasil, data member berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {
        Member::where("id", "=", $id)->delete();

        return redirect()->back()->with("alert", "Berhasil, data member berhasil dihapus!");
    }
}
