@extends('layouts.app')
@section('title', 'Comment Edit')
@section('content.title', 'Comment Edit')
@section('content')
    <form method="POST">
        @csrf
        @method('PUT')
        <x-forms.input name="message" title="Message" :value="$comment->content" />
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
