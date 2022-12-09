<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cod_ticket' => 'required|numeric|gt:0|unique:tickets,cod_ticket',
            'cod_evento' => 'required|numeric|min:4|unique:eventos,cod_evento',
            'rut_cliente' => 'required|max:20|unique:clientes,rut_cliente',
        ];
    }

    public function messages()
    {
        return[
            'cod_ticket.required'=>'Ingrese el código del ticket',
            'cod_ticket.numeric' => 'El código del ticket debe ser un número',
            'cod_ticket.gt' => 'El código del ticket debe ser mayor a cero',
            'cod_ticket.unique' => 'El código ya está asignado a otro ticket',
            'cod_evento.required'=>'Ingrese el código del evento',
            'cod_evento.numeric' => 'El código del evento debe ser un número',
            'cod_evento.min' => 'El código debe tener al menos 4 caracteres',
            'cod_evento.unique' => 'El código ya está asignado a otro evento',
            'rut_cliente.required'=>'Ingrese el rut del cliente',
            'rut_cliente.max'=> 'El rut no debe pasar los 20 caracteres',
            'rut_cliente.unique' => 'El rut ya existe',
        ];
    }







}
