<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventosRequest extends FormRequest
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
               'cod_evento' => 'required|numeric|min:4|unique:eventos,cod_evento',
               'nombre_evento' => 'required|max:50',
               'lugar_evento' => 'required|max:50',
               'fecha_evento' => 'required|date_format:d/m/Y',
               'hora_evento' => 'required',
               'precio' => 'required|numeric|gt:0',
        ];
    }

    public function messages()
    {
        return[
            'cod_evento.required'=>'Ingrese el código del evento',
            'cod_evento.numeric' => 'El código del evento debe ser un número',
            'cod_evento.min' => 'El código debe tener al menos 4 caracteres',
            'cod_evento.unique' => 'El código ya está asignado a otro evento',
            'nombre_evento.required'=>'Ingrese el nombre del evento',
            'nombre_evento.max' => 'El nombre del evento no debe pasar los 50 caracteres',
            'lugar_evento.required'=>'Ingrese el lugar del evento',
            'lugar_evento.max' => 'El nombre del lugar no debe pasar los 50 caracteres',
            'fecha_evento.required'=>'Ingrese la fecha del evento',
            'hora_evento.required'=>'Ingrese la hora del evento',
            'precio.required'=>'Ingrese el lugar del evento',
            'precio.numeric' => 'El precio debe ser un número',
            'precio.gt' => 'El precio debe ser mayor a cero',
        ];
    }






}
