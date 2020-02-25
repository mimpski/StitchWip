@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-sm-12 col-12 ui-block">
            <br/><br/>
            <center>
                <h1>Create a news post</h1>
            </center>
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
                        <input type="text" name="slug" class="form-control">
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">SEO Description:</label>
                        <input type="text" class="form-control" name="seo_description">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="header_image">Header Image:</label>
                        <input type="text" class="form-control" name="header_image">
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


@endsection
