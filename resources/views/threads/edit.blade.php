@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Edit the stock</h1>

<form method="POST" action="/project/{{ $project->id }}">

	<div class="form-group">
    <input type="text" name="thread_id" class="form-control" value="{{ $thread->thread_is }}"/>  
    <input type="text" name="stock" class="form-control" value="{{ $thread->stock }}"/>  
    <input type="text" name="user_id" class="form-control" value="{{ $user->id }}"/>  
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update project</button>
	</div>
{{ csrf_field() }}
</form>



</div>

@stop