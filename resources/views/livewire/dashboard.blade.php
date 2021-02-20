<div>
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


    <section class="tours__page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="sub-title">Upcoming Events</div>
                     
                    </div>
                </div>
                
            </div>


          

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
            
            @php
                $checEvent = auth()->user()->bookings()->firstWhere('event_id', $event->id);              
            @endphp
            
            @if(!$checEvent)
                <button class="site__btn sb--line" wire:click="registerEvent({{ $event }})">Register</button>
            @else
                 <h3 class="btn btn-success">Booked</h3>
            @endif

            {{-- <button onclick="return confirm('Confirm booking!')" class="site__btn sb--line" wire:click="registerEvent({{ $event }})">Register</button> --}}
            {{-- <a href="{{ route('regevent',['id' => $event->id]) }}" class="site__btn sb-line ">Register</a> --}}           
        </div>
    </div>
     @endforeach
           
        </div>
    </section>
</div>