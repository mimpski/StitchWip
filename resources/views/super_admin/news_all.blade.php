@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-sm-12 col-12 ui-block">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="/superadmin/news/add" class="btn btn-primary pull-right">Create New</a>
                        </td>
                    </tr>
                    @foreach($news as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td class="post-{{$post->status}}">{{$post->status}}</td>
                            <td>{{date('j F, Y', strtotime($post->created_at))}}</td>
                            <td>
                                @if($post->status !== 'published')
                                    <a href="#" class="publish_post_popup btn btn-green" data-newsid="{{$post->id}}" data-toggle="modal" data-target="#publish_post">Publish</a>
                                @else
                                    <a href="#" class="disabled btn btn-green" data-toggle="modal" data-target="#update-user">Publish</a>
                                @endif
                                <a href="/superadmin/news/{{$post->id}}/edit" class="btn btn-purple" >Edit</a>
                                <a href="#" class="delete_post_popup btn btn-danger" data-newsid="{{$post->id}}" data-toggle="modal" data-target="#delete-post">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-post" tabindex="-1" role="dialog" aria-labelledby="delete-post" aria-modal="true">
	<div class="modal-dialog window-popup delete-post" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
                    <h6 class="title">Are you sure you want to delete this post?</h6><br/>
                    <p>This will delete the whole post. This cannot be undone.</p>
                </center>
				<form method="post" action="/superadmin/news/delete">
                    <input type="hidden" class="delete_news_id" name="delete_news_id" value=""/>
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

<div class="modal fade" id="publish_post" tabindex="-1" role="dialog" aria-labelledby="publish_post" aria-modal="true">
	<div class="modal-dialog window-popup update-post" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
                    <h6 class="title">Publish this post?</h6><br/>
                </center>
                <form method="post" action="/superadmin/news/publish">
                    <select name="status">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <input type="hidden" class="update_post_id" name="update_post_id" value=""/>
                    <br/>
                    <center>
                    <button value="submit" class="btn btn-green">Publish Now</button>
                    </center>
                    {{ csrf_field() }}
                </form>
		    </div>
		</div>
	</div>
</div>


@endsection
