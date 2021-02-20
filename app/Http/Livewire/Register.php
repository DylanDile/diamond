<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;

class Register extends Component
{
	public $name;
	public $username;
	public $email;
	public $gender;
	public $phone;
	public $password;

    public function render()
    {
        return view('livewire.register');
    }


    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['required', 'string', 'max:20'],
            'username' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string', 'max:6'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function registerSubmit()
    {

    	$data = $this->validate([
            'name' => ['required', 'string', 'max:20'],
            'username' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string', 'max:6'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        //if(User::query()->where(''))

        User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);


        session()->flash('success', 'Registration success.');
        $this->reset();
        return;
    }

}
