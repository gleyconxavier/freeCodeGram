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
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>232</strong> posts</div>
                <div class="pr-5"><strong>32,4k</strong> followers</div>
                <div class="pr-5"><strong>233</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <p> {{ $user->profile->description }}</p>
            <div><a href="#"> {{ $user->profile->url }} </a></div>
        </div>
    </div>
    <div class="row pt-4">
    <div class="col-4">
        <img src="https://instagram.fpbq1-1.fna.fbcdn.net/vp/8a7f03d5f0e0643d84641ef29f98ad33/5E4C716E/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/75379747_1984863518283661_4296065131383461825_n.jpg?_nc_ht=instagram.fpbq1-1.fna.fbcdn.net&_nc_cat=101" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://instagram.fpbq1-1.fna.fbcdn.net/vp/bcf4ef972d9b34cb45bcd928c3e2976f/5E5CFC1B/t51.2885-15/e35/c95.0.559.559a/75388569_559359151480556_2784072752921865307_n.jpg?_nc_ht=instagram.fpbq1-1.fna.fbcdn.net&_nc_cat=108" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://instagram.fpbq1-1.fna.fbcdn.net/vp/a5bf5950b1eb151bfee396e9d0bf88e8/5E623A2F/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/73174649_2404377109881299_3305170173981020096_n.jpg?_nc_ht=instagram.fpbq1-1.fna.fbcdn.net&_nc_cat=111" class="w-100">
    </div>
    </div>
</div>
@endsection
