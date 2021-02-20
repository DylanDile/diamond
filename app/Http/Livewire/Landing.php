<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Landing extends Component
{
	public $count = 0;
	public $pageLogin = 0;
	public $pageRegister = 0;
    public function render()
    {
        return view('livewire.landing');
    }

    public function mount()
    {
        $this->pageLogin = 1;
        $this->pageRegister = 0;
    }

    public function showLogin()
    {        
        if($this->pageLogin==0)
        {
        	$this->pageLogin=1;
        	$this->pageRegister = 0;
        	
        }
        elseif($this->pageLogin ==1)
        {
        	$this->pageLogin= 0;
        	$this->pageRegister = 1;
        }


    }

    public function showRegister()
    {        
        if($this->pageRegister==0)
        {
        	$this->pageRegister=1;
        	$this->pageLogin = 0;
        }
        elseif($this->pageRegister ==1)
        {
        	$this->pageRegister = 0;
        	$this->pageLogin = 1;
        }
    }

    public function increment()
    {
    	Log::info($this->count);
        $this->count++;
       
    }

}
