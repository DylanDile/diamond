@extends('layouts.app')
@section('content')


<header>
    <div class="header__warp">
    <div class="row">
    <div class="col-lg-2">
    <a href="index.html" class="site__logo">
    <img src="img/logo.png" alt="">
    </a>
    </div>
    <div class="col-lg-8">
    <ul class="main__menu">
    
    <li><a href="{{ route('viewevents') }}" class="menu--active">Bookings </a></li>
   
    <li><a href="{{ route('admin.event') }}">Create Event</a></li>
    
    </ul>
    </div>
    <div class="col-lg-2 text-lg-right d-none d-lg-block">
      <a class="site__btn " href="{{ route('logout') }}"
                                    
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
   </form>
    </div>
    </div>
   </div>
    </header>

    <section class="page-top-section">
        <div class="container bg-dark">

            <div class="col-md-12 text-white">   
                    <h5 class="sub-title">Event Date : 
                    <span> {{ \Carbon\Carbon::parse($eventdetails->date)->format('d') }} </span>
                    <span>{{ \Carbon\Carbon::parse($eventdetails->date)->format('M') }}</span>  </h5>
                    <p>Booking Details</p>
            </div>
            
   
     <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">number</th>
            <th scope="col">email</th>
            <th scope="col">sex</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($bookings as $booking)
          <tr>
            <th scope="row">{{ $booking->user->name }}</th>
            <td>{{ $booking->user->phone }}</td>
            <td> {{ $booking->user->email }} </td>
            <td>{{ $booking->user->gender }}</td>
          </tr>
 @endforeach

        </tbody>
      </table>
     {{-- @endforeach --}}
           
        </div>
    </section>
</div>
@endsection