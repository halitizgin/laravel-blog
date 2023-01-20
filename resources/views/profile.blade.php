@extends('layouts.app')
@section('title', $current->name . ' Profile')
@section('content.title', $current->name . ' Profile')
@section('styles')
    <link rel="stylesheet" href="{{ url('css/auth.css') }}">
@endsection
@section('content')
    <h3>Update Profile</h3>
    <form action="{{ route('profile.update') }}" method="GET">
        @csrf
        <x-forms.input name="name" title="Full Name" type="text" :value="$current->name" />

        <x-forms.input name="email" title="E-Mail" type="email" :value="$current->email" />

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <hr>
    <h3>Update Password</h3>
    <form action="{{ route('profile.password.update') }}" method="POST">
        @csrf
        <x-forms.input name="old_password" title="Old Password" type="password" />

        <x-forms.input name="password" title="New Password" type="password" />

        <x-forms.input name="password_confirmation" title="New Password Confirmation" type="password" />

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
