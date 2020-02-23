@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

        @include('includes.profile-header') 

    <form action="/thread/update" method="post" class="container">
    <div class="thread_list row">
        @if (Auth::check())
        @foreach($threads as $thread)
        <div class="col col-md-{{$bootstrapColWidth}}">
			<div class="ui-block">
				<div class="form-group form-inline" style="margin: 0; padding: 10px;">					
                    <label>{{$thread->thread_no}} - {{ $thread->name }}</label>
                    <input type="text" style="max-width: 50px;padding:5px;float: right;margin-left: auto;" name="{{$thread->id}}" value="{{$thread->stock}}"/> 
				</div>
			</div>
        </div>
        @endforeach 
        <div class="fixed-button">
        <button type="submit" class="btn btn-primary pull-right">Update Thread Inventory</button>
        {{ csrf_field() }}
        </div>
    </form>
</div>
        @else
            <div class="card-body">
                <h3>Sorry, you cannot view another users thread inventory.</h3>
            </div>
        @endif
    </div>   
</div>                      
</div>
@endsection