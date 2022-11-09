<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaGastoRequest;
use App\Http\Resources\CategoriaGastoResource;
use App\Models\CategoriaGasto;
use Illuminate\Http\Request;

class CategoriagastoController extends Controller
{
    public function index()
    {
        $categoria = CategoriaGasto::get();

        return new CategoriaGastoResource($categoria);

    }

    public function store(CategoriaGastoRequest $request, CategoriaGasto $orcamento)
    {
        $input = $request->validated();        

        $categoria = CategoriaGasto::create($input);

        return new CategoriaGastoResource($categoria);   

    }

    public function show (CategoriaGasto $categoria)
    {             
        return new CategoriaGastoResource($categoria);   
    }

    public function update(CategoriaGastoRequest $request, CategoriaGasto $categoria)
    {
        $input = $request->validated();        
        $categoria->save($input);
        dd($categoria);
        

        return new CategoriaGastoResource($categoria);   

    }

    public function destroy(CategoriaGasto $categoria)
    {       
        $categoria->delete();        
        return response()->json('Deletado', 200);                  
          
    }
}


