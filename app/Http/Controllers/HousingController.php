<?php

namespace App\Http\Controllers;

use App\Http\Requests\HousingStoreRequest;
use App\Models\Housing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return Inertia::render('TrovaCoinquilino', [
            'housings' => Housing::get()
        ]);
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
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'string|max:30',
            'descrizione' => 'nullable|string|max:255',
            'costo' => 'nullable|string|max:50',
            'city' => 'string|max:30',
            'numero_telefono' => 'string|nullable|max:30',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,pdf,svg'
        ]);
        
        $user_id = Auth::id();

        $image_path = '';
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('image', 'public');
        }
        // save the file $image_path to your database
        Housing::create([
            'nome' => $request->nome,
            'descrizione' => $request->descrizione,
            'costo' => $request->costo,
            'city' => $request->city,
            'numero_telefono' => $request->numero_telefono,
            'image' => $image_path,
            'user_id' => $user_id
        ]);
    
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function edit($housing_id)
    {
        $housing = Housing::find($housing_id);
        return Inertia::render('EditHousing', [
            'housing' => $housing
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Housing $housing, $id)
    {
        
        $housing = Housing::find($id);
        //dd("CI ARRIVO", $request);

        $image_path = '';
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('image', 'public');
        }
        $request->validate([
            'nome' => 'string|max:30',
            'descrizione' => 'nullable|string|max:255',
            'costo' => 'nullable|string|max:50',
            'city' => 'string|max:30',
            'numero_telefono' => 'string|nullable|max:30',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,pdf,svg'
        ]);
        
        $housing->nome = $request->nome;
        $housing->descrizione = $request->descrizione;
        $housing->costo = $request->costo;
        $housing->city = $request->city;
        $housing->numero_telefono = $request->numero_telefono;
        $housing->image = $request->image;
        $housing->save();
        
        return redirect()->route('HousingIndex')->with('message', 'Annuncio modificato');
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
