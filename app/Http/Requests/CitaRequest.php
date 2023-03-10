<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'start' => 'required',
            'title' => 'required',
            'mascota_id' => 'required',
            'cliente_id' => 'required',
            'hora' => [
                'required',
                'date_format:H:i',
                Rule::unique('citas')->where(function ($query) use ($request) {
                    return $query->where('start', $request->start)
                        ->where('hora', $request->hora);
                }),
            ],
        ];
    }
}
