<?php

namespace App\Http\Controllers;

use App\Models\Ia;
use App\Models\Categoria;
use Illuminate\Http\Request;


class IaController extends Controller
{ /**
    * Obtener todas las inteligencias artificiales con sus categorías
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $ias = IA::with('categoria')->get();
       return response()->json($ias);
   }

   /**
    * Obtener todas las categorías
    *
    * @return \Illuminate\Http\Response
    */
   public function categorias()
   {
       $categorias = Categoria::all();
       return response()->json($categorias);
   }

   /**
    * Obtener IAs por categoría
    *
    * @param int $categoriaId
    * @return \Illuminate\Http\Response
    */
    public function porCategoria($categoriaId)
    {
        $ias = IA::with('categoria')
                    ->where('categoria_id', $categoriaId)
                    ->get();
        
        return response()->json($ias);
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
        //
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
