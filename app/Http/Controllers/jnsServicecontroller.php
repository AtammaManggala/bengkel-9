<?php

namespace App\Http\Controllers;

use App\Models\jnsService;
use Illuminate\Http\Request;

class jnsServicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jnsService::get();
        //ddd($data);
        return view('JnsService.tampilJnsService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('JnsService.tambahJnsService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new jnsService();
        $data->jns_service = $request->jns_service;
        $data->keterangan = $request->keterangan;
        $post = $data->save();
        return redirect('jnsservice');
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
        //mencari data bersarkan id
        $data = jnsService::where('id_jns_service', '=', $id)
        ->get();
        return view('jnsService.updateJnsService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = jnsService::where('id_jns_service', '=', $id);
        $data->update([
            'jns_service' => $request->jns_service,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('jnsservice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus table/data
        $data = jnsService::where('id_jns_service', '=', $id);
        $data->delete();
        return redirect('jnsservice');
    }
}
