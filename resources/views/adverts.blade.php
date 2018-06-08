@extends('layouts.app')

@section('content')
	<?php
		$images = [
			'https://d1d0j63unuon9v.cloudfront.net/assets/ad/12/42/e638196a794828fbf9d3b88e33128b0b.JPEG',
			'https://d1d0j63unuon9v.cloudfront.net/assets/ad/5/78/1702df4f6b55d5f17c4b8cdca27bb2dc.JPEG',
			'https://d1d0j63unuon9v.cloudfront.net/assets/ad/93/11/b39666f1e9f7cbe628cb0a31badef8e4.JPEG',
			'https://d1d0j63unuon9v.cloudfront.net/assets/ad/80/35/eb026ce314460028ce56d067d058e058.JPEG'
		];
	?>
	@for($x = 0; $x < 8; $x++)

	<div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
        	<!-- <img class="card-img-top" src="images/placeholder.png" alt="Card image cap"> -->
        	<div class="wrapper">
	        	<img class="card-img-top img-fluid" src="{{ $images[array_rand($images)] }}" alt="Card image cap">
	        </div>

            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent theme-toggle text-light" type="button" data-toggle="tooltip" title="Download image">
                        <i class="fa fa-download"></i>
                    </button>
                </div>
                
                <h4 class="card-title mb-3">This Photo Has Not Been Edited, Look Closer</h4>

                <p class="card-text text-white">
                	<small class="pull-left">
                		<i class="fa fa-eye" data-toggle="tooltip" title="First Seen"></i>
                		<span data-toggle="tooltip" title="Apr 21, 2018">48 days ago</span>
                	</small>

                	<small class="pull-right">
                		<i class="fa fa-eye-slash" data-toggle="tooltip" title="First Seen"></i>
                		<span data-toggle="tooltip" title="Jun 09, 2018">Today</span>
                	</small>
                </p>

            </div>

        </div>
    </div>
    @endfor
@endsection