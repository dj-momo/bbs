@extends('layouts.auth')

@section('content')
<div class="d-flex h-100 bg-light">
    <div class="bg-white w-100 p-5 border shadow-sm rounded m-auto" style="max-width: 480px;">
        <div class="d-flex flex-row justify-content-center mb-4 align-items-center">
            <img src="https://via.placeholder.com/50x50?text=Your+Logo" alt="">
            <h3 class="ml-3">Bulletin Board System</h3>
        </div>
        <h5 class="my-4 text-center">Sign in to your account</h5>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign in</button>
        </form>
    </div>
</div>
@endsection
