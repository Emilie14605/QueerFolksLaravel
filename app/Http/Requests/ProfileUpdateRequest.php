<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'passwordr' => ['nullable', 'same:password'],
            'firstname' => ['string', 'max:255'],
            'surname' => ['string', 'max:20'],
            'age' => ['numeric', 'min:18'],
            'picture' => ['file', 'max:2048'],
            'description' => ['string', 'max:255'],
            'gender' => [Rule::in(['Homme Cisgenre', 'Femme Cisgenre', 'Homme Transgenre', 'Femme Transgenre', 'Genderfluid', 'Genderqueer', 'Agenre'])],
            'sexualorientation' => [Rule::in(['Homosexuelle', 'Bisexuelle', 'Pansexuelle', 'Demi-sexuelle', 'Asexuelle', 'Heterosexuelle'])],
            'romanticorientation' => [Rule::in(['Homoromantique', 'Biromantique', 'Panromantique', 'Demi_romantique', 'Aromantique', 'Heteroromantique'])],
            'lookingfor' => [Rule::in(['Relation Amicale', 'Relation Romantique', 'Relation Sexuelle'])],
        ];
    }
    
     


    // public function rules(): array
    // {
    //     return [
    //         'name' => ['string', 'max:255'],
    //         'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
    //         // 'password' => ['confirmed', Rules\Password::defaults()],
    //         // 'firstname' => ['string', 'max:255'],
    //         // 'surname' => ['string', 'max:20'],
    //         // 'age' => ['numeric', 'min:18'],
    //         // 'picture' => ['image', 'max:2048'],
    //         // 'description' => ['string', 'max:255'],
    //         // 'gender' => [Rule::in(['Homme Cisgenre', 'Femme Cisgenre', 'Homme Transgenre', 'Femme Transgenre', 'Genderfluid', 'Genderqueer', 'Agenre'])],
    //         // 'sexualorientation' => [Rule::in(['Homosexuelle', 'Bisexuelle', 'Pansexuelle', 'Demi-sexuelle', 'Asexuelle', 'Heterosexuelle'])],
    //         // 'romanticorientation' => [Rule::in(['Homorantique', 'Biromantique', 'Panromantique', 'Demi-Romantique', 'Aromantique', 'Heteroromantique'])],
    //         // 'lookingfor' => [Rule::in(['Relation Amicale', 'Relation Romantique', 'Relation Sexuelle'])],
    //     ];
    // }
}
