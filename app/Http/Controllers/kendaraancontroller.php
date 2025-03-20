<?php

namespace App\Http\Controllers;

use App\Models\jnsKendaraan;
use App\Models\kendaraan;
use Illuminate\Http\Request;

class kendaraancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kendaraan::get();
        //dd($data);
        return view('kendaraan.tampilKendaraan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('kendaraan.tambahKendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new kendaraan();
        $data->no_pol = $request->kendaraan;
        $data->tahun_kendaraan = $request->thn_kendaraan;
        $data->no_mesin = $request->no_mesin_kendaraan;
        $data->no_rangka = $request->no_rangka_kendaraan;
        $data->kapasitas_mesin = $request->kapasitas_mesin_kendaraan;
        $data->transmisi = $request->transmisi_kendaraan;
        $post = $data->save();
        return redirect('kendaraan');
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
        // mencari data berdasarakan id
        $data = kendaraan::where('id_kendaraan', '=', $id)
        ->get();
        return view('kendaraan.updatekendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = kendaraan::where('id_kendaraan', '=', $id);
        $data->update([
            'no_pol' => $request->kendaraan,
            'tahun_kendaraan' => $request->thn_kendaraan,
            'no_mesin' => $request->no_mesin_kendaraan,
            'no_rangka' => $request->no_rangka_kendaraan,
            'kapasitas_mesin' => $request->kapasitas_mesin_kendaraan,
            'transmisi' => $request->transmisi_kendaraan,
        ]);
        return redirect('kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus table/data
        $data = kendaraan::where('id_kendaraan', '=', $id);
        $data->delete();
        return redirect('kendaraan');
    }
}
