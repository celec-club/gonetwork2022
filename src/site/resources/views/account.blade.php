@extends("template.main")
<style type="text/css">
	h2 {
		text-decoration: underline;
		text-decoration-color: #7689f5;
		white-space: nowrap;
	}
	.left {
		text-align: center;
		padding: 2%;
		width: 50%;
		float: left;
		margin-top: 2%;
	}
	.right {
		margin-top: 2%;
		text-align: center;
		padding: 2%;
		width: 50%;
		float: right;	
	}
</style>
@section("content")
<div class="page-content" style="margin-top: 10%; margin-bottom: 10%;">
	<div class="container">
		<div class="text">
			<center>
				<h1>YOUR INFORMATION</h1>
			</center>
			<div class="left">			
				<ul>
					<li><h2>{{$user->fullname}}</h2></li>
					<li><h2>{{$user->phone}}</h2></li>
				</ul>
			</div>
			<div class="right">
				<ul>
					<li><h2>{{$user->education_level}} {{$user->field}}</h2></li>
					<li><h2>{{$user->email}}</h2></li>
				</ul>
			</div>
				<div style="margin-top: 15%;">
					<center>
						<a href="{{ url("storage/qrs/".$user->id."_qr.png") }}" download="{{ url("storage/qrs/".$user->id."_qr.png") }}"><img width="50%" src='{{ url("storage/qrs/".$user->id."_qr.png") }}'></a>
					<br/>
					<h3>
						It is mandatory to bring back a copy of your QR code. Click on the image to download it
					</h3>
					</center>
				</div>
			</div>
		</div>
	</div>
	@endsection