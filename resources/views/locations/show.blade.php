@extends('layouts.default')

@section('content')

<div class="row">
	<div class="col-sm-10">
		<h1>{{$location->name}} &nbsp 
			<small> 
				<a href="/locations/{{$location->id}}/edit">edit</a>
			</small>
		</h1>
		<p class="lead">{{$location->active}}</p>
	</div>
	<div class="col-sm-2">
		@include('forms.locations-delete')
	</div>
</div>

@stop