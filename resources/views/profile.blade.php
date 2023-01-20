@extends('layouts.app')
@section('title', $current->name . ' Profile')
@section('content.title', $current->name . ' Profile')
@section('content')
    <h3>Update Profile</h3>
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <x-forms.input name="name" title="Full Name" type="text" :value="$current->name" />

        <x-forms.input name="email" title="E-Mail" type="email" :value="$current->email" />

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
