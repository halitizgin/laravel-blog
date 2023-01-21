@extends('layouts.app')
@section('title', 'Laravel Kod Evreni Home')
@section('content.title', 'All Posts')
@section('content')
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4">
                <x-post :$post />
            </div>
        @endforeach
    </div>
@endsection
