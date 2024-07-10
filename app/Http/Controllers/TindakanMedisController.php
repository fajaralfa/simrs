<?php

namespace App\Http\Controllers;

use App\Models\TindakanMedis;
use Illuminate\Http\Request;

class TindakanMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tindakan.index', [
            'semua_tindakan_medis' => TindakanMedis::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tindakan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tindakanMedis = TindakanMedis::create($request->all());

        return redirect(url('/tindakan', $tindakanMedis->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(TindakanMedis $tindakanMedis, string $id)
    {
        return TindakanMedis::find($id); // temporary, model dependency injection not working
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TindakanMedis $tindakanMedis, string $id)
    {
        return view('tindakan.edit', [
            'tindakan' => TindakanMedis::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TindakanMedis $tindakanMedis, string $id)
    {
        $tindakanMedis = TindakanMedis::find($id);

        $tindakanMedis->update($request->all());

        return redirect(url('/tindakan', $tindakanMedis->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TindakanMedis $tindakanMedis, string $id)
    {
        TindakanMedis::find($id)->delete();

        return redirect(url('/tindakan'));
    }
}
