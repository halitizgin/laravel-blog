@extends('layouts.app')
@section('title', 'Laravel Kod Evreni Home')
@section('content.title', 'All Posts')
@section('content')
    {{ $posts->links('pagination::bootstrap-4') }}
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-4">
                <x-post :$post />
            </div>
        @empty
            <div class="col-md-12">
                <span>There is no posts!</span>
            </div>
        @endforelse
    </div>
    {{ $posts->links('pagination::bootstrap-4') }}
@endsection
