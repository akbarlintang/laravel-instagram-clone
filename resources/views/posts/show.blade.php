@extends('layouts.app')

@section('content')
<div class="container zg">
    <div class="row post">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100 mx-auto d-block">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" style="max-height: 3em;" class="rounded-circle w-100">
                    </div>
                    <div>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}" class="pr-1">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            |
                            <a href="#" class="pl-1">Follow</a>
                        </span>
                    </div>
                </div>

                <hr>

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
