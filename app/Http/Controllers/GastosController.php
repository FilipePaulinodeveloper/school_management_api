<?php

namespace App\Http\Controllers;

use App\Http\Requests\GastoRequest;
use App\Http\Resources\GastoResource;
use App\Models\Gasto;
use App\Models\Gastos;
use Illuminate\Http\Request;

class GastosController extends Controller
{
    public function index() 
    {        
        $gasto = Gasto::get();

        return new GastoResource($gasto);
    }

    public function store(GastoRequest $request, Gasto $gasto)
    {
        $input = $request->validated();        

        $gasto = Gasto::create($input);

        return new GastoResource($gasto);  

    }
    public function show(Gasto $gasto)
    {           
        return new GastoResource($gasto);                    
    }

    public function update(GastoRequest $request, Gasto $gasto)
    {
        $input = $request->validated();        

        $gasto->update($input);

        return new GastoResource($gasto);  

    }
    public function destroy(Gasto $gasto)
    {       
        $gasto->delete();
        
        return response()->json('Deletado', 200);                    
          
    }
}
