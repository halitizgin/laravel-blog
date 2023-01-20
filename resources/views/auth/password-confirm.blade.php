@extends('layouts.auth')
@section('title', 'Laravel Password Confirm')
@section('content')
    <div class="wrapper">
        <h3>You have to confirm your password before the action completes</h3>
        <form class="form" method="POST">
            @csrf
            <x-forms.input name="password" title="Password" type="password" />

            <button class="btn btn-primary btn-block" type="submit">Confirm</button>
        </form>
    </div>
@endsection
