<?php

namespace App\Http\Controllers;

use App\Models\Housing;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request as FacadesRequest;
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

        $housings = Housing::with('images')
            ->when(request('search'), function ($query, $search) {
                $query->where('nome', 'like', "%{$search}%")
                ->orWhere('city', 'like', "%{$search}%")
                ->orWhere('stato_annuncio', 'like', "%{$search}%")
                ->orWhere('costo', 'like', "%{$search}%");
            })
            ->get()
            ->map(function ($housing) {

                $images = $housing->images->pluck('path')->toArray();

                return [
                    'id' => $housing->id,
                    'nome' => $housing->nome,
                    'descrizione' => $housing->descrizione,
                    'city' => $housing->city,
                    'costo' => $housing->costo,
                    'stato_annuncio' => $housing->stato_annuncio,
                    'user_id' => $housing->user_id,
                    'image' => $images
                ];
            });
    
        $filters = request()->only(['search']);
    
        return Inertia::render('TrovaCoinquilino', compact('housings', 'filters'));
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
            'descrizione' => 'nullable|string|max:500',
            'costo' => 'nullable|string|max:50',
            'city' => 'string|max:30',
            'numero_telefono' => 'string|nullable|max:30',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,pdf,svg'
        ]);
    
        $user_id = Auth::id();
    
        $housing = Housing::create([
            'nome' => $request->nome,
            'descrizione' => $request->descrizione,
            'costo' => $request->costo,
            'city' => $request->city,
            'numero_telefono' => $request->numero_telefono,
            'user_id' => $user_id
        ]);

        
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('image', 'public');
                
                $image = new Image([
                    'path' => $path
                ]);
                $housing->images()->save($image);
            }
        }
        
        return redirect()->route('HousingIndex')->with('message', 'Annuncio inserito');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function show($housing_id)
    {
        $housing = Housing::with('images')->find($housing_id);
        return Inertia::render('ShowHousing', [
            'housing' => $housing
        ]);
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
    public function update(Request $request, Housing $housing, $id) //image update not working!
    {   
        $housing = Housing::find($id);

        $request->validate([
            'nome' => 'string|max:30',
            'descrizione' => 'nullable|string|max:500',
            'costo' => 'nullable|string|max:50',
            'city' => 'string|max:30',
            'numero_telefono' => 'string|nullable|max:30'
        ]);
        
        $image_paths = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file){
                $image_paths[] = $file->store('image', 'public');
            }
        }
    
        $housing->nome = $request->nome;
        $housing->descrizione = $request->descrizione;
        $housing->costo = $request->costo;
        $housing->city = $request->city;
        $housing->numero_telefono = $request->numero_telefono;
        $housing->save();
    
        
        return redirect()->route('HousingIndex')->with('message', 'Annuncio modificato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Housing  $housing
     * @return \Illuminate\Http\Response
     */
    public function destroy($housing_id)
    {
        
        $housing = Housing::find($housing_id);
        $housing->delete();

        return redirect()->route('HousingIndex');

    }
}
