<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadFile;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Event;
use App\Models\Booking;
use Auth;


class AdminController extends Controller
{
    public function index(){
      
        return  view('admin.events');
    }

    public function create(Request $request){



       
      if(Auth::user()->role == 'admin')
      {
        if (!$request->hasFile('image')) 
        {
            return response()->json(['Upload File not supplied'], 404);
        }
        else
        {
          $this->validate($request, [
            'date' => ['required', 'string'],
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', ],
            'venue' => ['required', 'string'],
            'start_time' => ['required'],
            'end_time' => ['required'],
           ]);
    


         $day =  \Carbon\Carbon::parse($request['date'])->format('d');
        $mon =\Carbon\Carbon::parse($request['date'])->format('M') ;


            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();     


            $name = $mon.$day.'.'.$extension;
           
            

            $path = public_path() . '/img/events/';
            $file = $file->move($path, $name);
 
        }


        $event = new Event([
         'date'=> $request['date'],
         'title'=>$request['title'],
         'description' => $request['description'],
         'venue'=> $request['venue'],
         'start_time'=>$request['start_time'],
         'end_time'=>$request['end_time'],
         'imagename'=>$name
        ]);

        $event->save();

        return  view('admin.events')->with('success', 'Event Added Successfuly');

      }
      else
      {
        return redirect()->route('home');
      }
    }
       
    

    public function viewevents()
    {
            if(Auth::user()->role == 'admin')
            {
                $events =  Event::All(); 
                return view('admin.viewevents',compact('events'));
            }
            else
            {
                return redirect()->route('home');
            }
    }

    public function bookings(Request $request)
    {

        if(Auth::user()->role == 'admin')
        {
            $bookings =  Booking::with('user','event')->
            where(['event_id'=>$request['event_id']])->get(); 
            $eventdetails = Event::where('id',$request['event_id'])->first();

              return view('admin.bookings',compact('bookings','eventdetails'));
        }else
        {
            return redirect()->route('home');
        }
      
    }

    
}
