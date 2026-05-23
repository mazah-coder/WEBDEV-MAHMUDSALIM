<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $santris = Santri::all();

        return view('santri.index', compact('santris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('santri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Santri::create([
            'nama'=> $request->nama,
            'kelas'=> $request->kelas,
            'alamat'=> $request->alamat,
        ]);
        return redirect('/santri');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $santri = Santri::findOrFail($id);
        return view('santri.show', compact('santri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $santri = Santri::findOrFail($id);
        return view('santri.edit', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $santri =Santri::findOrFail($id);
        $santri->update([
            'nama'=> $request->nama,
            'kelas'=> $request->kelas,
            'alamat'=> $request->alamat,
        ]);
        return redirect('/santri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $santri = Santri::findOrFail($id);
        $santri->delete();

        return redirect('santri');
    }
}
