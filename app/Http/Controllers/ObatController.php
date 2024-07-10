<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('obat.index', [
            'obat' => Obat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = request()->all();

        Obat::create($input);

        return redirect(url('/obat'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        return $obat;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        return view('obat.edit', ['obat' => $obat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $input = $request->all();

        $obat->update($input);

        return redirect(url("/obat/$obat->id"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        $obat->delete();

        session()->flash('message', "data obat $obat->kode | $obat->nama telah dihapus!");

        return redirect(url('/obat'));
    }
}
