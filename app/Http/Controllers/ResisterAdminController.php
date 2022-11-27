<?php

namespace App\Http\Controllers;

use App\Models\ResisterAdmin;
use Illuminate\Http\Request;
use App\Http\Requests\ResisterAdminRequest;
use Illuminate\Support\Facades\Hash;

class ResisterAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function create()
    {
        return view('admin.resister');
    }


    public function store(ResisterAdminRequest $request)
    {
        $admin = new ResisterAdmin($request->validated());
        $admin->password = HASH::make($admin['password']);
        $admin->save();

        return to_route('admin.login.index')->with('success', '管理者情報を登録できました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResisterAdmin  $resisterAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(ResisterAdmin $resisterAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResisterAdmin  $resisterAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(ResisterAdmin $resisterAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResisterAdmin  $resisterAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResisterAdmin $resisterAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResisterAdmin  $resisterAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResisterAdmin $resisterAdmin)
    {
        //
    }
}
