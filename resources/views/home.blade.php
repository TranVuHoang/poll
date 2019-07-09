@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfUD35TkfHpgPcH9Ox_xTaNa49f9s-IVZaj2rPjxk0jkxK0ZyA" alt="logo" style="height: 150px">
        </div>
        <div class="col-9 pt-2">
            <h1>POLLING - give us your opinion</h1>
            <p>{{$user->username}}</p>
            <div class="d-flex">
                <div class="pr-3"><a href="#"><strong>Create new survey</strong></a></div>
                <div><a href="#"><strong>List of survey</strong></a></div>
            </div>
        </div>
    </div>
</div>
@endsection
