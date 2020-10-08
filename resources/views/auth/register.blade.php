@extends('layouts.log')

@section('content')
<div class="form-v4-content">
            <div class="form-left">
                <h2>Random Text</h2>
                <p class="text-1">Some random text</p>
                <p class="text-2"><span>Title:</span> Some Random text eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
                <div class="form-left-last">
                    <input type="submit" name="account" class="account" value="I Have An Account">
                </div>
            </div>
            <form class="form-detail" method="POST" action="{{ route('register') }}">
                @csrf
                <h2>REGISTER FORM</h2>
                <div class="form-group">
                    <div class="form-row form-row-1">
                        <label for="first_name">First Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-row form-row-1">
                        <label for="first_name">Last Name</label>
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="form-row">
                    <label for="your_email">Your Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                    <div class="form-row form-row-1 ">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                    </div>
                    <div class="form-row form-row-1">
                        <label for="comfirm-password">Comfirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-checkbox">
                    <label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
                        <input type="checkbox" name="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Register">
                </div>
            </form>
        </div>
@endsection


