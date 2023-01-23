@extends('layouts.app')
@section('title', $category->name . ' Posts')
@section('content.title', $category->name . ' Posts')
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
