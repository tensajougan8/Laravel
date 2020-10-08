@extends('layouts.log')

@section('content')
<div class="form-v4-content">
            <div class="form-left">
                <h2>Random Text</h2>
                <p class="text-1">Some random text</p>
                <p class="text-2"><span>Title:</span> Some Random text eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
                <div class="form-left-last">
                    <a href="{{ route('register') }}"><input type="submit" name="account" class="account" value="I Don't Have An Account"></a>

                </div>
            </div>
            <form method="POST" action="{{ route('login') }}" class="form-detail" >
                @csrf
                <h2>LOGIN</h2>
                <div class="form-row">
                    <label for="your_email">Your Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-row">
                    
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                </div>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Login">
                </div>
            </form>
        </div>
@endsection
