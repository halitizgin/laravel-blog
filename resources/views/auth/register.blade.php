@extends('layouts.auth')
@section('title', 'Laravel Register')
@section('content')
    <div class="wrapper">
        <form class="form" method="POST">
            @csrf
            <x-forms.input name="name" title="Full Name" type="text" />

            <x-forms.input name="email" title="E-Mail" type="email" />

            <x-forms.input name="password" title="Password" type="password" />

            <x-forms.input name="password_confirmation" title="Password Confirmation" type="password" />

            <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
@endsection
