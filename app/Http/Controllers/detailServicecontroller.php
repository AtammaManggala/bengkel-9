<?php

namespace App\Http\Controllers;

use App\Models\detailService;
use Illuminate\Http\Request;

class detailServicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = detailService::get();
        //dd($data);
        return view('DetailService.tampilDetailService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('DetailService.tambahDetailService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert ke sql
        $data = new detailService();
        $data->sparepart = $request->sparepart;
        $data->harga = $request->harga;
        $post = $data->save();
        return redirect('detailservice');
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
        $data = detailService::where('id_detail_service', '=', $id)
        ->get();
        return view('DetailService.updateDetailService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = detailService::where('id_detail_service', '=', $id);
        $data->update([
            'sparepart' => $request->sparepart,
            'harga'=> $request->harga,
        ]);
        return redirect('detailservice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus table/data
        $data = detailService::where('id_detail_service', '=', $id);
        $data->delete();
        return redirect('detailservice');
    }
}
