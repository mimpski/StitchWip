@extends('layouts.app')
@section('content')
<div class="container">
    <div class="thread_list">
        @if (Auth::check())
        <div class="">

                            <form action="/thread/update" method="post">
                                <div class="row">
                            @foreach($threads as $thread)
                            <div class="col-md-{{$bootstrapColWidth}}">
                                <div class="thread_info">
                            {{$thread->thread_no}}
                             <input type="text" style="max-width: 50px" name="{{$thread->id}}" value="{{$thread->stock}}"/> 
                        </div> 
                    </div>
                            @endforeach   
                    </div>
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                                {{ csrf_field() }}
                            </form>
                        </div>
        @else
            <div class="card-body">
                <h3>You need to log in. <a href="/login">Click here to login</a></h3>
            </div>
        @endif
    </div>                         
</div>
@endsection