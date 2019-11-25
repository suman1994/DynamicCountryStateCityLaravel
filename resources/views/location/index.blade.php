@extends('layouts.app')
@section('content')
<html>
<body>
<div class="row">
	<div class="col-md-3">
		<select name="country" class="form-control" data-url="{{url('getState')}}" id="country">
		<option value="" selected disabled>Select Country</option>
		@if($allCountry)
			@foreach($allCountry as $country)
				<option value="{{$country->id}}">{{$country->name}} ( {{$country->phonecode}} )</option>
			@endforeach
		@endif
		</select>
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-3">
		<select class="form-control" name="state" data-url="{{url('getCity')}}" id="state" >
		<option value="">Select State</option>
		</select>
	</div>
</div>
<br>
<br>
<div class="row">
	<div class="col-md-3">
		<select class="form-control" name="city" id="city" >
		<option value="">Select City</option>
		</select>
	</div>
</div>
</div>
</body>
</html>
@endsection