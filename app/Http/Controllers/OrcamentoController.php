<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalendarioRequest;
use App\Http\Requests\OrcamentoRequest;
use App\Http\Resources\OrcamentoResource;
use App\Models\CalendarioEvento;
use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function index()
    {
        $orcamento = Orcamento::get();

        return new OrcamentoResource($orcamento);

    }

    public function store(OrcamentoRequest $request, Orcamento $orcamento)
    {
        $input = $request->validated();        

        $orcamento = Orcamento::create($input);

        return new OrcamentoResource($orcamento);   

    }

    public function show(Orcamento $orcamento)
    {       
            return new OrcamentoResource($orcamento);                     
    }

    public function update(OrcamentoRequest $request, Orcamento $orcamento)
    {
        $input = $request->validated();        

        $orcamento->update($input);

        return new OrcamentoResource($orcamento);   

    }

    public function destroy(Orcamento $orcamento)
    {       
        $orcamento->delete();
        
        return response()->json('Deletado', 200);                    
          
    }

  
}
