@extends('layouts.app')

@section('content')
<div class="container">
                <h2>Add New project</h2>
               
<form method="POST" action="/project">

    <div class="form-group">
    <input type="text" name="name" class="form-control"/>  
    <input type="text" name="source" class="form-control"/>  
    <input type="text" name="status" class="form-control" value="{{ $user->id }}"/>  
    <input type="text" name="user_id" class="form-control"/>  
    <input type="file" name="finished_image" class="form-control"/>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add project</button>
    </div>
{{ csrf_field() }}
</form>


</div>
@endsection