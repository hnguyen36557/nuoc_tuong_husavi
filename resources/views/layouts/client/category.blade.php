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
							@foreach ($data as $item)  
								<div class="news-about-us">
									<h3> <a href="{!! url($alias1,$item["alias"]) !!}">{!! $item['name'] !!}</a></h3>
									<p style="text-align: justify;">{!! $item['short_content'] !!}</p>
									<a class="btn" href="{!! url($alias1,$item["alias"]) !!}">Xem thêm</a>
								</div>
							@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection()