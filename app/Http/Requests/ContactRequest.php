<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'subject' => ['required', 'in:1,2,3'],
            'first_name' => ['required', 'string', 'min:2', 'max:255'],
            'last_name' => ['required', 'string', 'min:2', 'max:255'],
            'phone' => ['required', 'regex:/^\(\d{2}\) \d{4,5}-\d{4}$/'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:200'],
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'O campo "Assunto" é obrigatório. Por favor, selecione um assunto para sua mensagem.',
            'subject.in' => 'O "Assunto" selecionado é inválido. Por favor, escolha uma opção válida.',

            'first_name.required' => 'O campo "Nome" é obrigatório. Por favor, insira seu primeiro nome.',
            'first_name.string' => 'O "Nome" deve ser uma sequência válida de texto.',
            'first_name.min' => 'O "Nome" deve ter pelo menos 2 caracteres.',
            'first_name.max' => 'O "Nome" não pode ter mais de 255 caracteres.',

            'last_name.required' => 'O campo "Sobrenome" é obrigatório. Por favor, insira seu sobrenome.',
            'last_name.string' => 'O "Sobrenome" deve ser uma sequência válida de texto.',
            'last_name.min' => 'O "Sobrenome" deve ter pelo menos 2 caracteres.',
            'last_name.max' => 'O "Sobrenome" não pode ter mais de 255 caracteres.',

            'phone.required' => 'O campo "Telefone" é obrigatório. Por favor, insira seu número de telefone.',
            'phone.regex' => 'O número de telefone deve seguir o formato: (XX) XXXX-XXXX ou (XX) XXXXX-XXXX.',

            'email.required' => 'O campo "E-mail" é obrigatório. Por favor, insira seu endereço de e-mail.',
            'email.email' => 'O e-mail fornecido não é válido. Por favor, insira um e-mail com o formato correto.',
            'email.max' => 'O "E-mail" não pode ter mais de 255 caracteres.',

            'message.required' => 'O campo "Mensagem" é obrigatório. Por favor, digite sua mensagem.',
            'message.min' => 'A "Mensagem" deve ter pelo menos 10 caracteres.',
            'message.string' => 'A "Mensagem" deve ser uma sequência válida de texto.',
        ];
    }

}
