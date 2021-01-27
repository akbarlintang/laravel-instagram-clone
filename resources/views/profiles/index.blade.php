@extends('layouts.app')

@section('content')
<div class="container zg">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/zeromaru.png" style="height: 10em;" class="rounded-circle">
        </div>
        <div class="col-1"></div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $user->username }}</h2>
                <a href="/p/create">New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>13k</strong> followers</div>
                <div class="pr-5"><strong>381</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{ $post->image }}" class="w-100" alt="">
            </div>
        @endforeach
    </div>
</div>
@endsection
