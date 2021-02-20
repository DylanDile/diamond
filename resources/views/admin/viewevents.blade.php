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

     @foreach ($events as $event)
     <div class="show__item">
        <div class="show__date">
            <h2>{{ \Carbon\Carbon::parse($event->date)->format('d') }}</h2>
            <p>{{ \Carbon\Carbon::parse($event->date)->format('M') }}</p>
        </div>
        <div class="show__title">
            <h4>{{ $event->title }}</h4>
            <p>{{ $event->description }} | Age 18+ </p>
        </div>
        <div class="show__location">
            <p><i class="fa fa-map-marker"></i>{{$event->venue}} </p>
        </div>
        <div class="show__time">
            <p> <span> <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($event->start_time)->format('H:i') }} hrs</span> <span>---</span>     <span> <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($event->end_time)->format('H:i') }} hrs </span> </p>
           
        </div>
        <div class="show__btn">
            
         
            
           <a href="{{ route('bookings',['event_id' => $event->id]) }}" class="site__btn sb-line ">View Bookings </a>           
        </div>
    </div>
     @endforeach
           
        </div>
    </section>
</div>
@endsection