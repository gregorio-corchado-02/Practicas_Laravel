<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbooks = libro::all();
        return view('libros.index', compact('allbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addlibro= new libro();
        $addlibro-> titulo = $request->txttit;
        $addlibro-> autor = $request->txtaut;
        $addlibro-> paginas = $request->txtpag;
        $addlibro-> anio = $request->txtan;
        $addlibro-> save();

        return redirect()-> back ();


    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $libro = Libro::find($id);
        $libro->nombre=$request->txtnombre;
        $libro->save();
        

        return redirect()->route('libros.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $uptlibro= libro::find($id);
        $uptlibro-> titulo = $request->txttitulo;
        $uptlibro-> autor = $request->txtautor;
        $uptlibro-> paginas = $request->txtpaginas;
        $uptlibro-> anio = $request->txtanio;
        $uptlibro->update();

        return redirect ()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deslibro= libro::find($id);
        $deslibro->delete();
        return redirect()->back();
        
    }
}
