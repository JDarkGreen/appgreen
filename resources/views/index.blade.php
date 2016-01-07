
@extends('layouts.master')
	@section('content')
		{!!  Form::select('state' , $states , null , ['id'=>'state'] ) !!}
		{!! Form::select('town' , ['placeholder' => 'select' ] , null , ['id'=>'town'] ) !!}
	@endsection