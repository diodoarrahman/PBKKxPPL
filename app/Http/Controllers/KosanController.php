<?php

namespace App\Http\Controllers;

use App\Models\Kosan;
use Illuminate\Http\Request;

class KosanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kosan::all();
        // dd($data);
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namakosan' => 'required',
            'kamar_tersedia' => 'required',
            'jeniskos' => 'required',
            'tenggat_pembayaran' => 'required'
        ]);
        $kos = Kosan::create($request->all());
        if($kos){
            return redirect()->route('kosan')->with('success', 'Data buku berhasil ditambahkan');
        }
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
