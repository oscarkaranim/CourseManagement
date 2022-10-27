@extends('auth.authlayouts.master')

@section('content')

    <h2 class="text-center text-upper">Course Management System</h2>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <i class="fa fa-user"></i>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

        </div>
        <div class="form-group help">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" id="inputPassword3" placeholder="Password" required>
            <i class="fa fa-lock"></i>
            <a href="#" class="pass-view fa fa-eye"></a>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group">
            <div class="flexbox align-items-center">
									<span class="custom-checkbox form-check">
										<input type="checkbox" class="form-check-input" id="checkbox1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label for="checkbox1">Remember me</label>
									</span>
                <a href="{{ route('password.request') }}" data-toggle="tooltip" class="theme-cl" data-original-title="Forgot Password">Forgot Password?</a>
            </div>
        </div>

        <div class="form-group">
            <div class="flexbox align-items-center">
                <button type="submit" class="btn btn-primary">Login</button>
                <p>If You Are a New User <a href="{{route('register')}}" data-toggle="tooltip" class="gredient-cl" data-original-title="Sign Up">Signup Here.</a></p>
            </div>
        </div>

    </form>

@endsection
