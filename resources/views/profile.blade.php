@extends('layouts.app')
@section('title', $current->name . ' Profile')
@section('content.title', $current->name . ' Profile')
@section('content')
    <p>{{ $current->name }} Profile</p>
@endsection
