@extends('layouts.client.master')
@section('content')
<section id="section">
			<div class="page-content">
				<div class="page-content-header">
					<div class="page-content-header-box">
						<h1>{!! $name !!}</h1>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 hidden-xs">
							@include('layouts.client.include.bottom')
						</div>
						<div class="col-md-9 col-sm-8">
							<div class="right-page">
							
								<div class="news-about-us">
								<p>{!! $detail_post->long_content !!}</p>
									
								</div>
							
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
				@endsection()