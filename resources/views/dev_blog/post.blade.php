@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt50">
		<div class="col col-xl-8 m-auto col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">

				
				<!-- Single Post -->
				
				<article class="hentry blog-post single-post single-post-v2">
				
					<a href="/behind-the-scenes" class="post-category bg-blue-light">BEHIND THE SCENES</a>
					<h2 class="h1 post-title">{{ $post->title }}</h2>
				
					<div class="single-post-additional inline-items">
						<div class="post__author author vcard inline-items">
							<img alt="author" src="/img/avatar84-sm.jpg" class="avatar">
							<div class="author-date not-uppercase">
								<a class="h6 post__author-name fn" href="#">{{ $user->name }}</a>
								<div class="author_prof">
									Author
								</div>
							</div>
						</div>
						<div class="post-date-wrap inline-items">
							<div class="post-date">
								<a class="h6 date" href="#">{{ date('j F, Y', strtotime($post->created_at)) }}</a>
								<span>Date</span>
							</div>
						</div>
					</div>
					<div class="post-content-wrap">
				
						<div class="post-content">
                            {{ $post->description }}
                        </div>
					</div>
				
				</article>
				
				<!-- ... end Single Post -->

				
				
			</div>
		</div>
	</div>
</div>

@endsection