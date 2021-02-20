<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class Login extends Component
{
	public $username;
	public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
    		'username' => 'required|min:3,max:20',
    		'password' => 'required|min:3,max:20'
    	]);
 
    }

    public function loginSubmit()
    {
        $this->validate([
        	'username' => 'required|min:3,max:20',
        	'password' => 'required|min:3,max:20'
        ]);

        if(Auth::attempt(['username'=> $this->username, 'password' => $this->password]))
        {
            session()->flash('success', 'Login success.');
            if(Auth::user()->role == 'admin'){
                return redirect()->route('viewevents');
            }else{
                return redirect()->route('home');
            }
        	
        }
        else
        {
        	session()->flash('error', 'Failed to login.');
        	return;
        }
    }
}
