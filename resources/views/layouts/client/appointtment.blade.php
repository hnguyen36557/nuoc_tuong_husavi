@extends('layouts.client.master')
@section('content')
<section id="section">
			<div class="page-content">
				<div class="page-content-header">
					<div class="page-content-header-box">
						<h1>General Dentistry</h1>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 hidden-xs">
							@include('layouts.client.include.bottom')
						</div>
						<div class="col-md-9 col-sm-8">
							<div class="right-page">
							@foreach ($data as $item)  
								<div class="news-about-us">
									<h3>{!! $item['name'] !!}</h3>
									<p>{!! $item['short_content'] !!}</p>
									<a class="btn" href="{!! url($alias1,$item["alias"]) !!}">Learn more</a>
								</div>
							@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection()