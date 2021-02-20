@extends('layouts.app')
@section('content')

<header>
    <div class="header__warp">
    <div class="row">
    <div class="col-lg-2">
    <a href="#" class="site__logo">
    <img src="img/lo.gif" alt="">
    </a>
    </div>
    <div class="col-lg-8">
    <ul class="main__menu">
   
    <li><a href="{{ route('viewevents') }}">View Bookings </a></li>

    <li><a href="{{ route('admin.event')  }}" class="menu--active">Create  Event</a></li>
  
   
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
 
    </header>


<section class="page-top-section">
    <div class="container">
        <div class="page-info-box">
            <div class="page-info-icon">
                <i class="fa fa-headphones"></i>
            </div>
            <div class="page-info-text">
                <h2>Register For Upcoming Events </h2>
                <div class="site-breadcrumb">
                    <a href="/">Welcome</a>
                    <span>Events</span>
                </div>
            </div>

            
        </div>
    </div>
</section>


<section class="tours__page col-md-10 mx-auto">
    <div>
        <div class="footer-form-warp bg-light">               
            <div class="section-title">
                <div class="sub-title">Create an Event</div>
                <div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
    
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
            <form method="POST"  action="{{ route('admin.create') }}" enctype='multipart/form-data'>
            {{-- <form wire:submit.prevent="registerSubmit"> --}}
                @csrf
                <div class="row text-white">
                    <div class="col-lg-6">
                        <input wire:model.lazy="date" type="date"  name="date" value="{{ old('date') }}" class="form-control text-dark @error('date') is-invalid @enderror" placeholder="Name">
    
                        @error('date')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    
                    </div>


                    <div class="col-lg-6">
                        <input wire:model.lazy="title" type="text" name="title" value="{{ old('title') }}" class="form-control text-dark @error('title') is-invalid @enderror" placeholder="title">
                        @error('title')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                    </div>
    
                    <div class="col-lg-6">
                        <textarea name="venue" wire:model.lazy="venue"  value="{{ old('venue') }}" class="form-control text-dark @error('venue') is-invalid @enderror" id="" cols="30" rows="10" placeholder="Enter Venue Address"></textarea>
                        @error('venue')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    
                    </div>
    
                    
                    <div class="col-lg-6">
                        <textarea name="description" wire:model.lazy="description"  value="{{ old('description') }}" class="form-control text-dark @error('description') is-invalid @enderror" id="" cols="30" rows="10" placeholder="Description of event"></textarea>
                        @error('description')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    
                    </div>

                    <div class="col-lg-6">
                        <input type="time" wire:model="start_time" name="start_time" value="{{ old('start_time') }}" class="form-control text-dark @error('start_time') is-invalid @enderror" placeholder="start_time">
                   
                        @error('start_time')
                        <span class="invalid-feedback text-danger " role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
    
                    <div class="col-lg-6">
                        <input type="time" wire:model="end_time" name="end_time" value="{{ old('end_time') }}" class="form-control text-dark @error('end_time') is-invalid @enderror" placeholder="end_time">
                   
                        @error('end_time')
                        <span class="invalid-feedback text-danger " role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
    
    
                    <div class="col-lg-10">
                        <input type="text" wire:model="status" name="status" value="{{ old('status') }}" class="form-control text-dark @error('status') is-invalid @enderror" placeholder="status">
                   
                        @error('status')
                        <span class="invalid-feedback text-danger " role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>


                    <div class="col-lg-10">
                        <label class="text-dark" for="image">Image for the Event</label>
                        <input type="file" wire:model="image" name="image" value="{{ old('image') }}" class="form-control text-dark @error('image') is-invalid @enderror" placeholder="image">
                   
                        @error('image')
                        <span class="invalid-feedback text-danger " role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
    
    
    
    
               
                   
                  
                    <div class="col-lg-12">
                        <button class="site__btn" type="submit">Create Event</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</section>


<footer class="footer__section">
    <div class="container">
        <div class="footer__copyright__text">
            <p>Copyright   <script>
                    document.write(new Date().getFullYear());
                </script>  
            </p>
        </div>
    </div>
</footer>


@endsection
 




