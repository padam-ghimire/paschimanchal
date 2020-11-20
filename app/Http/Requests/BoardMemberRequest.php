<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardMemberRequest extends FormRequest
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
        // protected $fillable=['name','designation_id','phone','facebook','image'];

        return [
            'name'=>'required',
            'designation_id'=>'required',
            'phone'=>'required',
            'facebook'=>'required',
            'image'=>'required'
        ];
    }
}
