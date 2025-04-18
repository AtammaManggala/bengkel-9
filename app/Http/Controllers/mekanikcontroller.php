<?php

namespace App\Http\Controllers;

use App\Models\mekanik;
use Illuminate\Http\Request;

class mekanikcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mekanik::get();
        //dd($data);
        return view('mekanik.tampilMekanik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('mekanik.tambahMekanik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new mekanik();
        $data->nm_mekanik = $request->mekanik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_hp = $request->no_hp;
        $post = $data->save();
        return redirect('mekanik');
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
        $data = mekanik::where('id_mekanik', '=', $id)
        ->get();
        return view('mekanik.updatemekanik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = mekanik::where('id_mekanik', '=', $id);
        $data->update([
            'nm_mekanik' => $request->mekanik,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
        ]);
        return redirect('mekanik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus table/data
        $data = mekanik::where('id_mekanik', '=', $id);
        $data->delete();
        return redirect('mekanik');
    }
}
