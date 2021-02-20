<div>
    <form wire:submit.prevent="loginSubmit">
        @csrf
        <div class="footer-form-warp bg-light">
            <div class="section-title">
                <div class="sub-title">Login</div>
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
                <div class="row text-white">

                    <div class="col-lg-6">
                        <input wire:model.lazy="username" type="text"  name="username" value="{{ old('username') }}" class="form-control text-dark @error('username') is-invalid @enderror" placeholder="Username">

                        @error('username')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    </div>

                    <div class="col-lg-6">
                        <input wire:model.lazy="password" type="password" name="password" class="form-control text-dark  @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="col-lg-12">
                        <button class="site__btn" type="submit" >Login</button>
                    </div>
                </div>
           
        </div>

    </form>
</div>
