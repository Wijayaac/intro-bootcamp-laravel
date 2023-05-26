<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "isbn"          => 'required|min:10|max:13',
            "title"         => 'required|max:250',
            "author_id"     => 'required|max:11',
            "user_id"     => 'required|max:11',
            "image_path"    => 'required|max:100',
            "publisher"     => 'required|max:50',
            "category"      => 'required|max:50',
            "pages"         => 'required',
            "language"      => 'required|max:20',
            "publish_date"  => 'required',
            "subjects"      => 'required|max:50',
            "desc"          => 'required',
        ];
    }
}
