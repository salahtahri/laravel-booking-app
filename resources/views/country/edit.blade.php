@extends('layouts.app')

@section('content')

{!! Form::model($country, array('action' => array('CountryController@update', $country->id), 'method' => 'PUT')) !!}
<div class="form-group col-sm-6">
  {!! Form::label('Name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
  {{ Form::submit('Edit', array('class' => 'btn btn-default')) }}
</div>
{!! Form::close() !!}




@endsection
