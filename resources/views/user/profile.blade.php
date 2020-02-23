@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		
		@include('includes.profile-header') 
		
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="photo-album-wrapper">
                            @if(Auth::user() == $user)
                            <div class="photo-album-item-wrap col-4-width">
							
                                <div class="photo-album-item create-album" data-mh="album-item" style="height: 460.133px;">
                                
                                    <a href="#" data-toggle="modal" data-target="#create-photo-album" class="  full-block"></a>
                                
                                    <div class="content">
                                
                                        <a href="#" class="btn btn-control bg-primary" data-toggle="modal" data-target="#create-photo-album">
                                            <svg class="olymp-plus-icon"><use xlink:href="/svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
                                        </a>
                                
                                        <a href="#" class="title h5" data-toggle="modal" data-target="#create-photo-album">Create an Album</a>
                                        <span class="sub-title">It only takes a few minutes!</span>
                                
                                    </div>
                                
                                </div>
                            </div>
                            @endif
                            @foreach($wips as $project)
                            <div class="photo-album-item-wrap col-4-width">
                                <div class="photo-album-item" data-mh="album-item" style="height: 460.133px;">
                                    <div class="photo-item">
                                        <img src="/img/photo-item2.jpg" alt="Project - {{$project->name}}">
                                        <a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
                                    </div>
                                
                                    <div class="content">
                                        <a href="#" class="title h5">{{$project->name}}</a>
                                        <span class="sub-title">Last Added: 2 hours ago</span>
                                        <span class="sub-title sub-title-wip">Work In Progress</span>
                                    </div>
                                
                                </div>
                            </div>
                            @endforeach
                            @foreach($comps as $project)
                            <div class="photo-album-item-wrap col-4-width">
                                <div class="photo-album-item" data-mh="album-item" style="height: 460.133px;">
                                    <div class="photo-item">
                                        <img src="/img/photo-item2.jpg" alt="Project - {{$project->name}}">
                                        <a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
                                    </div>
                                
                                    <div class="content">
                                        <a href="#" class="title h5">{{$project->name}}</a>
                                        <span class="sub-title">Last Added: 2 hours ago</span>
                                        <span class="sub-title sub-title-comp">Completed</span>
                                    </div>
                                
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

        </div>
    </div>
</div>
@endsection
