<?php

namespace Modules\contact\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactRequest extends FormRequest
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
            'nameAndFamily' => ['required','max:100'],
            'numberPhone' => ['required','size:11'],
            'email' => ['required','email'],
            'subject' => ['required','max:100'],
            'messageText' => ['required','max:255']
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message'   => 'errors',
            'data'      => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'nameAndFamily.required' => 'نام و نام خانوادگی خود را وارد کنید.',
            'numberPhone.required' => 'شماره همراه خود را وارد کنید.',
            'numberPhone.size' => 'شماره همراه باید برابر با 11 کاراکتر باشد.',
            'email.required' => 'ایمیل خود را وارد کنید.',
            'email.email' => 'ایمیل وارد شده معتبر نمی باشد.',
            'subject.required' => 'موضوع خود را وارد کنید.',
            'subject.max' => 'تعداد حروف موضوع نباید بیشتر از 100 حرف باشد.',
            'messageText.required' => 'متن پیام خود را وارد کنید.',
            'messageText.max' => 'تعداد حروف پیام نباید بیشتر از 255 حرف باشد.',
        ];
    }
}
