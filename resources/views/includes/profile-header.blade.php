@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="/profile/{{ $user->name }}" class="active">Projects</a>
									</li>
									<li>
										<a href="/profile/{{ $user->name }}/threads">Threads</a>
									</li>
									<li>
										<a href="06-ProfilePage.html">Forum Posts</a>
									</li>
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<a href="07-ProfilePage-Photos.html">Photos</a>
									</li>
									<li>
										<a href="09-ProfilePage-Videos.html">Videos</a>
									</li>
									<li>
										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<ul class="more-dropdown more-with-triangle">
												<li>
													<a href="#">Report Profile</a>
												</li>
												<li>
													<a href="#">Block Profile</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">

                            @if(Auth::user() && $user->name = Auth::user()->name)
							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="/svg-icons/sprites/icons.svg#olymp-settings-icon"></use></svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#" data-toggle="modal" data-target="#widget-profile-pic">Update Profile Photo</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#update-header-photo">Update Header Photo</a>
									</li>
									<li>
										<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
									</li>
								</ul>
                            </div>
                            @endif
						</div>
					</div>
					<div class="top-header-author">
						<a href="/profile/{{ $user->name }}/" class="author-thumb">
							<img src="/images/users/{{ $user->name }}/avatar.png" alt="author">
						</a>
						<div class="author-content">
							<a href="/profile/{{ $user->name }}/" class="h4 author-name">{{ $user->name }}</a>
							<div class="country">Stitcher</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        
<!-- Update profile pic popup -->
<div class="modal fade" id="widget-profile-pic" tabindex="-1" role="dialog" aria-labelledby="widget-profile-pic">
<div class="modal-dialog window-popup widget-profile-pic" role="document">
    <div class="modal-content">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
        </a>

        <div class="modal-header">
            <h6 class="title">Generate new profile photo</h6>
        </div>

        <div class="modal-body">
            <center>
        <p>We currently only allow for randomly generated avatars but you can generate as many times as you like.</p>
            </center>
            <a href="#" class="generate-author-thumb">
                <img src="/images/users/{{ $user->name }}/avatar.png" alt="author">
            </a>
            <div class="container">
            <div class="row">
        <div class="col col-md-6 col-sm-12 col-12">
            <a href="#" id="generate-new-profile" class="btn btn-purple btn-lg full-width">Generate</a>
        </div>
        <div class="col col-md-6 col-sm-12 col-12">
            <form action="/profile/{{$user->name}}/profilepic" method="post"/>
                <input type="hidden" value="" class="new_profile_val" name="new_profile"/>
                <button type="submit" class="btn btn-green btn-lg full-width">Save</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>
</div>