@extends('layouts.app')

@section('content')
<div class="container zg">
    <div class="row">
        <div class="col-3 p-5">
            <a href="/profile/{{ $user->id }}/edit">
                <img src="{{ $user->profile->profileImage() }}" style="max-height: 10em;" class="rounded-circle">
            </a>
        </div>
        <div class="col-1"></div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex pb-3 align-items-center">
                    <div class="h2">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can ('update', $user->profile)
                    <a href="/p/create">New Post</a>
                @endcan
            </div>

            @can ('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
