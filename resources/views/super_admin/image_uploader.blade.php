@extends('layouts.app')

@section('content')
@include('includes.alerts')

<div class="container">
    <div class="row">
        
    <!-- Upload  -->
    <form id="file-upload-form" class="uploader" action="{{url('/superadmin/image/save')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);">
        <label for="file-upload" id="file-drag">
            <center>
                <img id="file-image" src="#" alt="Preview" class="hidden">
                <input type="text" name="image_title" class="hidden" placeholder="Name your file"/>
            </center>
            <div id="start" >
                <i class="fa fa-download" aria-hidden="true"></i>
                <div>Select a file or drag here</div>
                <div id="notimage" class="hidden">Please select an image</div>
                <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                <br>
                <span class="text-danger">{{ $errors->first('fileUpload') }}</span>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </label>
    </form>
         </div>
        </div>
        <script>
            function readURL(input, id) {
              id = id || '#file-image';
              if (input.files && input.files[0]) {
                  var reader = new FileReader();
          
                  reader.onload = function (e) {
                      $(id).attr('src', e.target.result);
                  };
          
                  reader.readAsDataURL(input.files[0]);
                  $('#file-image').removeClass('hidden');
                  $('#file-drag input').removeClass('hidden');
                  $('#start').hide();
              }
           }
          </script> 
    @endsection