<?php

namespace App\Http\Requests;

class ProjectInvitationRequest extends Request
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
            'invite.*.email'       => 'required|email',
            'invite.*.name'        => 'required',
            'invite.*.organization'=> 'required',
        ];
    }
}
