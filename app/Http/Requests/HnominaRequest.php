<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HnominaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'udp' => 'required',
			'ct' => 'required',
			'filiacio' => 'required',
			'curp' => 'required',
			'nombre' => 'required',
			'plaza' => 'required',
			'mot_pla' => 'required',
			'stat_pla' => 'required',
			'desde' => 'required',
			'hasta' => 'required',
			'cheque' => 'required',
			'importe' => 'required',
			'usuario' => 'required',
			'vstatus' => 'required',
			'nomina' => 'required',
			'quincena' => 'required',
			'area' => 'required',
			'tipocheque' => 'required',
			'sede' => 'required',
			'banco' => 'required',
			'fpago' => 'required',
			'imprimir' => 'required',
			'estadop' => 'required',
			'tiponomina' => 'required',
			'numnomina' => 'required',
			'quincena2' => 'required',
        ];
    }
}
