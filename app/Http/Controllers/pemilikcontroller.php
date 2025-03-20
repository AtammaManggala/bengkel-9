<?php

namespace App\Http\Controllers;

use App\Models\pemilik;
use Illuminate\Http\Request;

class pemilikcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pemilik::get();
        return view('pemilik.tampilPemilik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('pemilik.tambahPemilik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new pemilik();
        $data->nm_pemilik = $request->pemilik;
        $data->tgl_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat_pemilik;
        $data->nik = $request->nik_pemilik;
        $data->no_hp = $request->no_hp_pemilik;
        $post = $data->save();
        return redirect('pemilik');
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
        //mencari data berdasarkan id
        $data = pemilik::where('id_pemilik', '=', $id)
        ->get();
        return view('pemilik.updatePemilik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = pemilik::where('id_pemilik', '=', $id);
        $data->update([
            'nm_pemilik' => $request->pemilik,
            'tgl_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat_pemilik,
            'nik' => $request->nik_pemilik,
            'no_hp' => $request->nomor_hp_pemilik,
        ]);
        return redirect('pemilik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus table/data
        $data = pemilik::where('id_pemilik', '=', $id);
        $data->delete();
        return redirect('pemilik');
    }
}
