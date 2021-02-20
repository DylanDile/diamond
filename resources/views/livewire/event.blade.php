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
        {{-- <form method="POST"  action="{{ route('register') }}"> --}}
        <form wire:submit.prevent="registerSubmit">
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
                    <input wire:model.lazy="title" type="text" name="title" value="{{ old('title') }}" class="form-control text-dark @error('title') is-invalid @enderror" placeholder="title">
                    @error('title')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               
                </div>



              

                <div class="col-lg-10">
                    <input type="time" wire:model="start_time" name="start_time" value="{{ old('start_time') }}" class="form-control text-dark @error('start_time') is-invalid @enderror" placeholder="start_time">
               
                    @error('start_time')
                    <span class="invalid-feedback text-danger " role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="col-lg-10">
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
                </div>
            </div>
        </form>
    </div>
</div>
