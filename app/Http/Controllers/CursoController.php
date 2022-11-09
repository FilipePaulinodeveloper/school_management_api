<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use App\Http\Resources\CursoResource;
use App\Models\Curso;
use App\Services\CursoService;
use Illuminate\Http\Request;

class CursoController extends Controller
{   
    private $cursoService;

    public function __construct(CursoService $cursoService)
    {
        $this->cursoService = $cursoService;
    }

    public function index ()
    {   
        $curso = Curso::get();
        return new CursoResource($curso);
    }

    public function store(CursoRequest $request, Curso $curso)
    {
        $input = $request->validated();        

        $curso = Curso::create($input);

        return new CursoResource($curso);  

    }
}
