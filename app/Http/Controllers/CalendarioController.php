<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalendarioRequest;
use App\Http\Resources\CalendarioResource;
use App\Models\CalendarioEvento;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{

    private $calendario;

    public function __construct(CalendarioEvento $calendario)
    {
        // $this->middleware('auth:api');
        $this->calendario = $calendario;
    }

    public function index () 
    {                   
        $calendario = CalendarioEvento::get();

        return new CalendarioResource($calendario);  
        
    }

    public function store (CalendarioRequest $request, CalendarioEvento $calendario)
    { 
        // $this->authorize('create', CalendarioEvento::class);       
        
        $input = $request->validated();   

        $calendario = CalendarioEvento::create($input);
       
        return new CalendarioResource($calendario);        
        
    }

    public function show(CalendarioEvento $calendario)
    {        
        return new CalendarioResource($calendario);
    }

    public function update(CalendarioRequest $request, CalendarioEvento $calendario)
    {

        $input = $request->validated();       

        $calendario->update($input);                   

        return new CalendarioResource($calendario);             
      
    }

    public function destroy(CalendarioEvento $calendario)
    {
       $calendario->delete();

       return response()->noContent();
    }

    
}
