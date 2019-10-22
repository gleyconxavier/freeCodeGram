@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-3 p-5">
                <img src="https://instagram.fpbq1-1.fna.fbcdn.net/vp/d091c0821d5bc6504c7c5bde90bbad14/5E2B1838/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fpbq1-1.fna.fbcdn.net"
                    alt="Logo" class="rounded-circle mb-3">
            </div>
            <div class="col-9 pt-5">
                <div><h1>freecodecamp</h1></div>
                <div class='d-flex'>
                    <div><strong>153</strong> posts</div>
                    <div><strong>23k</strong> followers</div>
                    <div><strong>212</strong> following</div>
                    <div></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
