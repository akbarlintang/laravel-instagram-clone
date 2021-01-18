@extends('layouts.app')

@section('content')
<div class="container zg">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/zeromaru.png" style="height: 10em;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h2>Zeromaru</h2></div>
            <div class="d-flex">
                <div class="pr-5"><strong>137</strong> posts</div>
                <div class="pr-5"><strong>13k</strong> followers</div>
                <div class="pr-5"><strong>381</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Zeromaru</div>
            <div>Just a random guy trying to learn to code.</div>
            <div><a href="#">github.com/akbarlintang</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="img/coding1.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="img/coding2.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="img/coding3.jpg" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
