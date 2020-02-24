@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Stitchers
								</span>
							</div>
							<div class="count-stat">{{$user_total}}</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									This Week's New Stitchers
								</span>
							</div>
							<div class="count-stat">{{$weeks_users}}</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Today's New Stitchers
								</span>
							</div>
							<div class="count-stat">{{$todays_users}}</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
        <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Today's Log In's
								</span>
							</div>
							<div class="count-stat">{{$todays_logins}}</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection