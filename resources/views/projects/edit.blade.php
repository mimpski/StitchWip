@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Edit the project</h1>

<form method="POST" action="/project/{{ $project->id }}">

	<div class="form-group">
    <input type="text" name="name" class="form-control" value="{{ $project->name }}"/>  
    <input type="text" name="source" class="form-control" value="{{ $project->source }}"/>  
    <input type="text" name="status" class="form-control" value="{{ $project->status }}"/>  
    <input type="text" name="user_id" class="form-control" value="{{ $user->id }}"/>  
	</div>


	<div class="form-group">
		<button type="submit" name="update" class="btn btn-primary">Update project</button>
	</div>
{{ csrf_field() }}
</form>



</div>

@stop