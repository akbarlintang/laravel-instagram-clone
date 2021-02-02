@extends('layouts.app')

@section('content')
<div class="container zg">
    @foreach ($posts as $post)
        <div class="post col-8 offset-2">
            <div class="row pb-2">
                <div class="d-flex align-items-center col-10 offset-1">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" style="max-height: 3em;" class="rounded-circle w-100">
                    </div>
                    <div>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}" class="pr-1">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-10 offset-1">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100 mx-auto d-block">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1">
                    <div>
                        <div>
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </span> {{ $post->caption }}
                        </div>
                        <a href="/p/{{ $post->id }}">View all comment</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row pt-4">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
