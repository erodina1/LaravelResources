@extends('layout.app')

@section('content')
    <h1>Add Customer</h1>
    
    {!! Form::open(['action' => ['CustomersController@store'], 'method' => 'post']) !!}
    <div class="form-group">
        {{Form::label('firstName', 'First Name', ['class' => 'control-label'])}}
        {{Form::text('firstName', "", ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('lastName', 'Last Name', ['class' => 'control-label'])}}
        {{Form::text('lastName', "", ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
    </div>
    <div class="form-group-md-6">
        {{Form::label('address', 'Address', ['class' => 'control-label'])}}
        {{Form::text('address', "", ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
    </div>
    <div class="form-row">
        <div class="form-group-md-6">
            {{Form::label('city', 'City', ['class' => 'control-label'])}}
            {{Form::text('city', "", ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
        </div>
        <div class="form-group-md-4">
            {{Form::label('state', 'State', ['class' => 'control-label'])}}
            {{Form::text('state', "", ['class' => 'form-control', 'placeholder' => 'Enter State'])}}
        </div>
        <div class="form-group-md-2">
            {{Form::label('zip', 'Zip', ['class' => 'control-label'])}}
            {{Form::text('zip', "", ['class' => 'form-control', 'placeholder' => 'Enter Zip Code'])}}
        </div>
    </div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection