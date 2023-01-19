@extends('layouts.auth')
@section('title', 'Laravel Login')
@section('content')
    <div class="wrapper">
        <form class="form" action="{{ route('login.auth') }}" method="POST">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input id="email" name="email" class="form-control" required type="text" placeholder="E-Mail" />
            </div>
            <div class="form-outline mb-4">
                <label name="password" class="form-label" for="password">Password</label>
                <input id="password" name="password" class="form-control" required type="password" placeholder="Password" />
            </div>

            <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
@endsection
