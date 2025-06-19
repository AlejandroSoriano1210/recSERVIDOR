<?php

namespace App\Http\Controllers;

use App\Models\Fabricado;
use App\Models\Mueble;
use App\Models\Prefabricado;
use Illuminate\Http\Request;

class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('muebles.index', ['muebles'=> Mueble::with('muebleable')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('muebles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate( [
            'denominacion' => 'required|string|max:255',
            'precio' => 'required|numeric|max:99999999.99|min:0',
            'muebleable_type' => 'required|string',
            'ancho' => 'required_if:muebleable_type,App\Models\Fabricado|nullable|integer',
            'alto' => 'required_if:muebleable_type,App\Models\Fabricado|nullable|integer',
        ]);

        if($validated['muebleable_type'] === 'App\Models\Fabricado') {

            $muebleable = Fabricado::create(['ancho' => $validated['ancho'],'alto' => $validated['alto']]);

        } else if($validated['muebleable_type'] === 'App\Models\Prefabricado') {

            $muebleable = Prefabricado::create();

        }

        // Mueble::create(['denominacion'=> $validated['denominacion'], 'precio' => $validated['precio'], 'muebleable_type' => $validated['muebleable_type'], 'muebleable_id' => $muebleable->id]);

        $mueble = new Mueble(['denominacion'=> $validated['denominacion'], 'precio' => $validated['precio']]);
        $mueble->muebleable()->associate($muebleable);
        $mueble->save();

        return redirect()->route('muebles.show', $mueble);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mueble $mueble)
    {
        return view('muebles.show', ['mueble'=> $mueble]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mueble $mueble)
    {
        return view('muebles.edit', ['mueble'=> $mueble]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mueble $mueble)
    {
        $validated = $request->validate( [
            'denominacion' => 'required|string|max:255',
            'precio' => 'required|numeric|max:99999999.99|min:0',
        ]);

        $mueble->fill( $validated );
        $mueble->save();
        return redirect()->route('muebles.show', ['mueble' => $mueble]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mueble $mueble)
    {
        $muebleable = $mueble->muebleable;
        $mueble->delete();
        $muebleable->delete();
        return redirect()->route('muebles.index');
    }
}
