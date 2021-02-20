<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use App\Models\Booking;
use Auth;

class Dashboard extends Component
{
	public $events;
    public function render()
    {
        return view('livewire.dashboard');
    }

    public function mount()
    {
        $this->getEvents();
    }

    public function getEvents()
    {
        $this->events = Event::query()->latest()->get();  
    }

    public function registerEvent(Event $event)
    {
        $booking = Booking::query()->create([
        	'user_id'=> auth()->user()->id,
        	'event_id' => $event->id,
        	'status' => 'booked'
        ]);

        session()->flash('success', 'You have successfully booked for this Event');
        $this->getEvents();
        return;
    }

}
