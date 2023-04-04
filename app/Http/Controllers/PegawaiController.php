<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'sts_pegawai' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'namasekolah' => 'required',
            'sttb' => 'required',
            'gelard' => 'required',
            'gelarb' => 'required',
            'tamat' => 'required',
            'tamatjabatan' => 'required',
            'jbts' => 'required',
            'sts_pernikahan' => 'required',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
