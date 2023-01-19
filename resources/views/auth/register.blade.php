@extends('layouts.auth')
@section('title', 'Laravel Register')
@section('content')
    <div class="wrapper">
        <form class="form" method="POST">
            @csrf
            <div class="form-outline mb-4 @error('name') invalid @enderror">
                <label class="form-label" for="name">Full Name</label>
                <input name="name" id="name" class="form-control" required type="text" placeholder="Full Name" />
                @error('name')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-outline mb-4 @error('email') invalid @enderror">
                <label class="form-label" for="email">Email</label>
                <input name="email" id="email" class="form-control" required type="text" placeholder="E-Mail" />
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-outline mb-4 @error('password') invalid @enderror">
                <label name="password" class="form-label" for="password">Password</label>
                <input id="password" name="password" class="form-control" required type="password" placeholder="Password" />
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-outline mb-4 @error('password_confirmation') invalid @enderror">
                <label name="password_confirmation" class="form-label" for="password_confirmation">Password Confirmation</label>
                <input id="password_confirmation" name="password_confirmation" class="form-control" required type="password" placeholder="Password Confirmation" />
                @error('password_confirmation')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
@endsection
