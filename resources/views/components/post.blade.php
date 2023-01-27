<div class="blog-entry ftco-animate">
    <div class="text text-2 pt-2 mt-3">
        <span class="category mb-3 d-block"><a
                href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a></span>
        <h3 class="mb-4"><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h3>
        <p class="mb-4">{{ $post->short_content }}</p>
        <div class="author mb-4 d-flex align-items-center">
            <div class="ml-3 info">
                <span>Written by</span>
                <h3><a href="{{ route('user', $post->user->id) }}">{{ $post->user->name }}</a></h3>
                <small><span>{{ $post->created_at->diffForHumans() }}</span></small>
            </div>
        </div>
        <div class="meta-wrap align-items-center">
            <div class="half order-md-last">
                <p class="meta">
                    <span><i class="icon-comment"></i>{{ $post->comments->count() }}</span>
                </p>
            </div>
            <div class="half">
                <p><a href="#" class="btn py-2">Continue Reading <span class="ion-ios-arrow-forward"></span></a>
                </p>
            </div>
        </div>
    </div>
</div>
