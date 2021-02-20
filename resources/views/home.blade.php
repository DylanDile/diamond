@extends('layouts.app')
@section('content')
<div>
    <header>
        <div class="header__warp">
            <div class="row">
                <div class="col-lg-2">
                    <a href="index.html" class="site__logo">
                        <img src="img/lo.gif" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2 ">
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
    <div>
        @livewire('dashboard')
    </div>

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

</div>
@endsection
