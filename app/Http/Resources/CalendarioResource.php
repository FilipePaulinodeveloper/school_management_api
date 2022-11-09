<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Http\Resources\Json\JsonResource;

class CalendarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return [
        //     'id' => $this->id,
        //     'titulo_evento' =>$this->titulo_evento,
        //     'categoria' =>  $this->categoria,
        //     'data_inicio' => $this->data_inicio,
        //     'data_termino' => $this->data_termino,
        //     'dia_todo' => $this->dia_todo,
        //     'descricao' => $this->descricao,
        //     'link' => $this->link
        // ];
        return parent::toArray($request);
        
    }
}
