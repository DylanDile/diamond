<div>
    <div class="footer-form-warp bg-light">
        <div class="section-title">
            <div class="sub-title">
                Registration
            </div>
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
        {{-- <form method="POST"  action="{{ route('register') }}"> --}}
        <form wire:submit.prevent="registerSubmit">
            @csrf
            <div class="row text-white">
                <div class="col-lg-6">
                    <input wire:model.lazy="name" type="text"  name="name" value="{{ old('name') }}" class="form-control text-dark @error('name') is-invalid @enderror" placeholder="Name">

                    @error('name')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>

                <div class="col-lg-6">
                    <input wire:model.lazy="username" type="text"  name="username" value="{{ old('username') }}" class="form-control text-dark @error('username') is-invalid @enderror" placeholder="Username">

                    @error('username')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>

                <div class="col-lg-6">
                    <input wire:model.lazy="phone" type="text" name="phone" value="{{ old('phone') }}" class="form-control text-dark @error('phone') is-invalid @enderror" placeholder="phone">
                    @error('phone')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>


                <div class="col-lg-6">
                    <select wire:model.lazy="gender" name="gender" value="{{ old('gender') }}" class="form-control text-dark @error('gender') is-invalid @enderror">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                    @error('gender')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>



                <div class="col-lg-10">
                    <input type="text" wire:model="email" name="email" value="{{ old('email') }}" class="form-control text-dark @error('email') is-invalid @enderror" placeholder="email">

                    @error('email')
                    <span class="invalid-feedback text-danger " role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>



                <div class="col-lg-12 row">
                    <div class="col-lg-6">
                        <input type="password" wire:model.lazy="password" name="password"  class="form-control text-dark @error('password') is-invalid @enderror"  placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-lg-6">
                        <input type="password" id="password-confirm" name="password_confirmation" class="text-dark form-control" placeholder="Corfirm Password">
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="site__btn" type="submit">Register Now</button>
                    <a href="/" class="btn btn-success float-right">Login</a>
                </div>
            </div>
        </form>
    </div>
</div>
