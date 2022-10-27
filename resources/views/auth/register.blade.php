@extends('auth.authlayouts.master')

@section('content')


    <h2 class="text-center text-upper">Register Account Course Management System</h2>
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text"  id="" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <i class="fa fa-user"></i>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group">
            <input type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <i class="fa fa-user"></i>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group help">
            <input type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <i class="fa fa-lock"></i>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group help">
            <input type="password"  placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <i class="fa fa-lock"></i>
        </div>



        <div class="form-group">
            <div class="flexbox align-items-center">
                <button type="submit" class="btn gredient-bg">Sign Up</button>
                <p>Already Have An Account <a href="{{route('login')}}" data-toggle="tooltip" class="gredient-cl" data-original-title="Login">Log In Here.</a></p>
            </div>
        </div>

    </form>


@endsection
