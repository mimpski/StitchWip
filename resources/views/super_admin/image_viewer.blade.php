<div class="container">
    <div class="row">
        @foreach($files as $file)
        <div class="gallery_product col-lg-2 col-md-3 col-sm-4 col-xs-6 filter hdpe">
            <img src="/images/news/{{$file->getRelativePathname()}}" class="img-responsive">
            <p>/images/news/{{$file->getRelativePathname()}}</p>
        </div>
        @endforeach
    </div>
</div>