@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-sm-12 col-12 ui-block">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Sign Up</th>
                    <th scope="col">Last Log in</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
        @foreach($users as $user)
        <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{date('H:i - j F, Y', strtotime($user->created_at))}}</td>
                    <td>{{date('H:i - j F, Y', strtotime($user->last_login))}}</td>
                    <td>
                        
                        @if($user->id !== 1)
                            <a href="#" class="update_user_popup btn btn-secondary" data-userid="{{$user->id}}" data-toggle="modal" data-target="#update-user">Role</a>
                            <a href="#" class="delete_user_popup btn btn-danger" data-userid="{{$user->id}}" data-toggle="modal" data-target="#delete-user">Delete</a>
                        @else
                            <a href="#" class="disabled btn btn-secondary">Role</a>
                            <a href="#" class="disabled btn btn-danger">Delete</a>
                        @endif
                    </td>
        </tr>
        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-user" tabindex="-1" role="dialog" aria-labelledby="delete-user" aria-modal="true">
	<div class="modal-dialog window-popup delete-user" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
                    <h6 class="title">Are you sure you want to delete this user?</h6><br/>
                    <p>This will delete the user and all of their projects. This cannot be undone.</p>
                </center>
				<form method="post" action="/superadmin/users/delete">
                    <input type="hidden" class="delete_user_id" name="delete_user_id" value=""/>
                    <br/>
                    <center>
                    <button value="submit" class="btn btn-danger">Delete</button>
                    </center>
                    {{ csrf_field() }}
                </form>
		    </div>
		</div>
	</div>
</div>

<div class="modal fade" id="update-user" tabindex="-1" role="dialog" aria-labelledby="update-user" aria-modal="true">
	<div class="modal-dialog window-popup update-user" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
                    <h6 class="title">Update a users role</h6><br/>
                </center>
                <form method="post" action="/superadmin/users/update">
                    <select name="role">
                        <option value="stitcher">Stitcher</option>
                        <option value="superadmin">SuperAdmin</option>
                    </select>
                    <input type="hidden" class="update_user_id" name="update_user_id" value=""/>
                    <br/>
                    <center>
                    <button value="submit" class="btn btn-danger">Update</button>
                    </center>
                    {{ csrf_field() }}
                </form>
		    </div>
		</div>
	</div>
</div>


@endsection
