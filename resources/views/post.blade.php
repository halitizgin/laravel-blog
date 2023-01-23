@extends('layouts.app')
@section('title', $post->title)
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h1 class="mb-3 font-weight-bold">{{ $post->title }}</h1>
                    <p>{{ $post->content }}</p>

                    {{-- <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">deserunt-ut</a>
                        </div>
                    </div> --}}

                    <div class="about-author d-flex p-4 bg-light">
                        <div class="desc">
                            Written By:
                            <h3><a href="#">{{ $post->user->name }}</a></h3>
                            <small>{{ $post->created_at->diffForHumans() }}</small>
                        </div>
                    </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5 font-weight-bold">9 Comments</h3>
                        <ul class="comment-list">
                            @foreach ($post->comments as $comment)
                                <li class="comment">
                                    <div class="comment-body">
                                        <h3>{{ $comment->user->name }}</h3>
                                        <div class="meta">{{ $comment->created_at->diffForHumans() }}</div>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="p-3 p-md-5 bg-light">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary" />
                                </div>
                            </form>
                        </div><!-- END COL -->
                    </div>
                </div>
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3 class="sidebar-heading">Category</h3>
                        <a href="#">{{ $post->category->name }}</a>
                    </div>
                </div>
            </div>
    </section>
@endsection
