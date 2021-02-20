<div>
    <header>
    <div class="header__warp">
        <div class="row">
            <div class="col-lg-2">
                <a href="#" class="site__logo">
                    <img src="img/lo.gif" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <ul class="main__menu">
                    <li><a href="{{ route('home') }}" class="menu--active">Home</a></li>
                    <li><a href="{{ route('home')}}">Upcoming Events</a></li>
                </ul>
            </div>

            @if($pageRegister == 1)
            <div class="col-lg-2 text-lg-right d-none d-lg-block">
                <button wire:click="showLogin()"  class="site__btn">Login</button>
            </div>
            @endif

            @if($pageLogin == 1)
            <div class="col-lg-2 text-lg-right d-none d-lg-block">
                <buton wire:click="showRegister()" class="site__btn">Registration</button>
            </div>
            @endif

        </div>
    </div>
</header>
<section class="hero__section set-bg" data-setbg="{{ asset('img/hero-bg.jpg') }}" style="background-image: url('img/hero.jpg');">
    <div class="container row text-white">

        <div class="col-md-5">
            <div class="hero__slider owl-carousel">
                <div class="hero__items">
                    <span>Interacial parties</span>
                    <h2>Diamond Club</h2>
                    <p>Register now </p>
                   
                </div>
                <div class="hero__items">
                    <span>Best Parties in town</span>
                    <h2>Diamond Club</h2>
                    <p>Book to reserve your place </p>
                    
                </div>
            </div> 

            {{-- <div class="hero__slider owl-carousel">
                <div class="hero__items">
                    <span>The electro vibe</span>
                    <h2>Tailor Lachiri</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                    <a href="#" class="site__btn">Buy tickets</a>
                </div>
                <div class="hero__items">
                    <span>The electro vibe</span>
                    <h2>Tailor Lachiri</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                    <a href="#" class="site__btn">Buy tickets</a>
                </div>
            </div> --}} 

        </div>
        <div class="col-md-7">
            @if($pageLogin == 1)
                @livewire('login')
            @endif
            <hr>

            @if($pageRegister == 1)
                @livewire('register')
            @endif
        </div>


    </div>
</section>
</div>