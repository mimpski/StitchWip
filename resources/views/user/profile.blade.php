@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif
        <div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="https://api.adorable.io/avatars/285/abott@adorable.png">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="#">{{ $user->name }}</a>
                    </div>
                    <div class="desc">Passionate designer</div>
                    <div class="desc">Curious developer</div>
                    <div class="desc">Tech geek</div>
                </div>
            </div>
            </div>
            <div class="col-lg-9 cold-sm-9">
            <div class="container">
            <div class="row">
                @foreach($user->projects as $project)
                    <div class="card col-sm-3">
                        <h1>{{$project->name}}</h1>
                    </div>
                @endforeach
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
