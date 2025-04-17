<?php

namespace App\Http\Controllers;

use App\Models\mekanik;
use App\Models\service;
use Illuminate\Http\Request;

class servicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = service::get();
        //dd($data);
        return view('service.tampilService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('service.tambahService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new service();
        $data->jns_kendaraan = $request->service;
        $data->keluhan = $request->keluhan;
        $data->nm_mekanik = $request->nm_mekanik;
        $data->tgl_masuk = $request->tgl_masuk;
        $data->tgl_keluar = $request->tgl_keluar;
        $post = $data->save();
        return redirect('service');
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
        $data = service::where('id_service', '=', $id)
        ->get();
        return view('service.updateService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = service::where('id_service', '=', $id);
        $data->update([
            'jns_kendaraan' => $request->service,
            'keluhan' => $request->keluhan,
            'nm_mekanik' => $request->nm_mekanik,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar' => $request->tgl_keluar,
        ]);
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus table/data
        $data = service::where('id_service', '=', $id);
        $data->delete();
        return redirect('service');
    }
}
