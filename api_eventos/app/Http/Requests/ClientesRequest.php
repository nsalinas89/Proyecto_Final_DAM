<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'rut_cliente' => 'required|max:20|unique:clientes,rut_cliente',
            'nombre_cliente' => 'required|max:50',
            'correo_cliente' => 'required|max:50',
            'telefono_cliente' => 'required|max:30',
        ];
    }

    public function messages()
    {
        return[
            'rut_cliente.required'=>'Ingrese el rut del cliente',
            'rut_cliente.max'=> 'El rut no debe pasar los 20 caracteres',
            'rut_cliente.unique' => 'El rut ya existe',
            'nombre_cliente.required'=>'Ingrese el nombre del cliente',
            'nombre_cliente.max'=>'El nombre del cliente no debe pasar los 50 caracteres',
            'correo_cliente.required'=>'Ingrese el correo del cliente',
            'correo_cliente.max'=> 'El correo no debe pasar los 50 caracteres',
            'telefono_cliente.required'=>'Ingrese el teléfono del cliente',
            'telefono_cliente.max'=> 'El telefono no debe pasar los 30 caracteres',
        ];
    }




}
