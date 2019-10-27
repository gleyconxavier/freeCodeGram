@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fpbq1-1.fna.fbcdn.net/vp/8df44fcf559654cb0f831976649db705/5E52A538/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fpbq1-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                
            </div>
            @can ('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                <!-- <a href="/profile/{{ $user->id }}/edit">Edit Profile</a> -->
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>32,4k</strong> followers</div>
                <div class="pr-5"><strong>233</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <p> {{ $user->profile->description }}</p>
            <div><a href="#"> {{ $user->profile->url }} </a></div>
        </div>
    </div>
    <div class="row pt-5">

    @foreach($user->posts as $post)

    <div class="col-4 pb-4">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </a>
    </div>
    @endforeach
    </div>
</div>
@endsection
