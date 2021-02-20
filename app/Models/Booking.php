<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Event;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

   public function user()
   {
	   	# code...
	   	return $this->belongsTo(User::class);
   }

    public function event()
   {
	   	# code...
	   	return $this->belongsTo(Event::class);
   }

}
