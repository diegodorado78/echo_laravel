<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'user_type'=>['nullable','string','max:255'],
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'gender'=> ['nullable','string','max:25'],
            'phone'=> ['nullable','integer'],
            'birthday'=> ['nullable'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'user_type'=>$input['user_type'],
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'gender' => $input['gender'],
             'phone' => $input['phone'],
            'birthday'=> $input['birthday'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

        ]);
    }
}