<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Http\Resources\v1\CategoriaResource;
use App\Http\Requests\v1\StoreCategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();

        return response() -> json([
            'status' => 200,
            'mensagem' => 'Lista de categorias retornada',
            'mensagem' => CategoriaResource::collection($categorias)
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriaRequest $request)
    {
        $categoria = new Categoria();

        $categoria->nomedacategoria = $request->nome_da_categoria;

        $categoria->save();

        return response()-> json ([
            'status' => 200,
            'mensagem' => 'Categoria criada',
            'categoria' => new CategoriaResource($categoria),
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoriaRequest $request, Categoria $categoria)
    {
        $categoria = Categoria::find($categoria->pkcategoria);
        $categoria->nomedacategoria = $request->nome_da_categoria;
        $categoria->update();

        return response()-> json ([
            'status' => 200,
            'mensagem' => 'Categoria atualizada',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return response()-> json ([
            'status' => 200,
            'mensagem' => 'Categoria apagada',
        ], 200);
    }
}
