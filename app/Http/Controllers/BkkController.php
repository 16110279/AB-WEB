<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BkkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dashboard';
        $menu = 'Dashboard';
        return view('bkk.index', compact('title','menu'));
    }

    public function lowongan()
    {
        $title = 'Lowongan';
        $menu = 'Lowongan';
        return view('bkk.lowongan', compact('title','menu'));
    }

    public function statistik()
    {
        $title = 'Statistik';
        $menu = 'Statistik';
        return view('bkk.statistik', compact('title','menu'));
    }

    public function profile()
    {
        $title = 'Profile';
        $menu = 'Profile';
        return view('bkk.profile', compact('title','menu'));
    }

    public function pengaturan()
    {
        $title = 'Pengaturan';
        $menu = 'Pengaturan';
        return view('bkk.pengaturan', compact('title','menu'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {

    }
}
