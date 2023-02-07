<?php

namespace App\Http\Controllers;

use App\Http\Requests\HousingStoreRequest;
use App\Models\Housing;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class HousingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('nuovoanncasa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HousingStoreRequest $request)
    {
        $request->validate([
            'nome' => 'required|string|max:30',
            'descrizione' => 'string|max:255',
            'costo' => 'string|max:50',
            'city' => 'string|max:30',
            'numero_telefono' => 'string|nullable|max:30',
            'foto' => 'file|mimes:jpeg,png,pdf'
        ]);

        $housing = Housing::create([
            'nome' => $request->nome,
            'descrizione' => $request->descrizione,
            'costo' => $request->costo,
            'city' => $request->city,
            'numero_telefono' => $request->numero_telefono,
        ]);

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $filename = time().$file->getClientOriginalName();
            $file->storeAs('public/images', $filename);
            $housing->foto = $filename;
            $housing->save();
        }

        return redirect()->route('HousingIndex')->with('message', 'Annuncio inserito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function show(Housing $housing)
    {
        return Inertia::render('TrovaCoinquilino', [
            'housings' => Housing::get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function edit(Housing $housing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Housing $housing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Housing $housing)
    {
        //
    }
}
