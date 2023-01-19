@extends('layouts.auth')
@section('title', 'Laravel Login')
@section('content')
    <div class="wrapper">
        <form class="form" method="POST">
            @csrf
            <x-forms.input name="email" title="E-Mail" type="email" />

            <x-forms.input name="password" title="Password" type="password" />

            <button class="btn btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
@endsection
