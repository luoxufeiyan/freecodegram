@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img src="/img/Avatar.jpg" class="rounded-circle" style="max-height: 180px"></div>
        <div class="col-9 pt-4">
            <div class="row pl-3"><h1>{{ $user->username }}</h1></div>
            <div class="d-flex flex-row">
                <div class="pr-2"><strong>122</strong> posts</div>
                <div class="pr-2"><strong>212</strong> follower</div>
                <div class="pr-2"><strong>281</strong> following</div>
            </div>
            <div class="pt-2"><strong>LL</strong></div>
            <div class="">布衣菜饭，可乐终身，不必作远游计也。</div>
            <div><strong><a href="www.luoxufeiyan.com">www.luoxufeiyan.com</a></strong></div>
        </div>
    </div>
    <div class="row pt-4 justify-content-center">
        <div class="d-flex flex-row">
            <div class="col-4"><img src="/img/Avatar.jpg"></div>
            <div class="col-4"><img src="/img/Avatar.jpg"></div>
            <div class="col-4"><img src="/img/Avatar.jpg"></div>
        </div>
    </div>
</div>
@endsection
