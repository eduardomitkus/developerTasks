<?php

namespace DeveloperTasks\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskCreateAndEdit extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:45',
            'description' => 'required|string|max:730',
            'priority' => 'in:"Baixa","Média","Alta"'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'título',
            'description' => 'descrição',
            'priority' => 'prioridade'
        ];
    }
}
