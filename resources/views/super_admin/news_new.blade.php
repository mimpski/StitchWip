@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-sm-12 col-12 ui-block">
            <br/><br/>
            <center>
                <h1>Create a news post</h1>
            </center>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif
            <form action="/superadmin/news/save" method="post"/>
            <br/><br/>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug">Slug:</label>
                        <input type="text" name="slug" disabled class="form-control" placeholder="This will autofill">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
                <!-- Create the editor container -->    
                <textarea id="editor" name="main_content"></textarea>
                <script>
                    CKEDITOR.replace('main_content');
                </script>
                </div>
            </div>
            <br/><br/>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="description">SEO Description:</label>
                        <input type="text" class="form-control" name="seo_description">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Image Viewer:</label><br/><br/>
                        <a href="#" data-path="/superadmin/image/show" class="view_images_popup btn btn-grey-light col-sm-12" data-toggle="modal" data-target="#image_library">Image Library</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="header_image">Header Image:</label>
                        <input type="text" class="form-control" name="header_image" placeholder="/images/news/">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" name="author" value="1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="cold-md-6">
                    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="image_library" tabindex="-1" role="dialog" aria-labelledby="image_library" aria-modal="true">
	<div class="modal-dialog window-popup image_library" role="document">
		<div class="modal-content">
			<div class="modal-body">
                <center><h1>Image viewer</h1></center>
                <div class="viewer-container">
                </div>
		    </div>
		</div>
	</div>
</div>

@endsection
