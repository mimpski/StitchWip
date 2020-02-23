@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12 blog-listing">
            <div class="single-post"><center><h1 class="h1 post-title">Behind The Scenes</h1></center></div>
        @foreach($posts as $post)
        <div class="col-md-12 blog-post" style="display: block;">
            <div class="post-title">
            <a href="/behind-the-scenes/{{$post->url}}"><h2>{{$post->title}}</h2></a>
            </div>  
            <div class="post-info">
                <span>{{ date('j F, Y', strtotime($post->created_at)) }} / by <a href="#" target="_blank">{{$user->name}}</a></span>
            </div>  
            <p>{{$post->description}}</p>                          			
            <a href="/behind-the-scenes/{{$post->url}}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
        </div>
        @endforeach
        </div>
    </div>
</div>

@endsection