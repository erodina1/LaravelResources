@extends('layout.app')

@section('content')
    <h1>A Customer</h1>
    
    {!! Form::open(['action' => ['CustomersController@update', $cust->custID], 'method' => 'put']) !!}
    <div class="form-group">
        {{Form::label('firstName', 'First Name', ['class' => 'control-label'])}}
        {{Form::text('firstName', $cust->firstName, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('lastName', 'Last Name', ['class' => 'control-label'])}}
        {{Form::text('lastName', $cust->lastName, ['class' => 'form-control'])}}
    </div>
    <div class="form-group-md-6">
        {{Form::label('address', 'Address', ['class' => 'control-label'])}}
        {{Form::text('address', $cust->address, ['class' => 'form-control'])}}
    </div>
    <div class="form-row">
        <div class="form-group-md-6">
            {{Form::label('city', 'City', ['class' => 'control-label'])}}
            {{Form::text('city', $cust->city, ['class' => 'form-control'])}}
        </div>
        <div class="form-group-md-4">
            {{Form::label('state', 'State', ['class' => 'control-label'])}}
            {{Form::text('state', $cust->state, ['class' => 'form-control'])}}
        </div>
        <div class="form-group-md-2">
            {{Form::label('zip', 'Zip', ['class' => 'control-label'])}}
            {{Form::text('zip', $cust->zip, ['class' => 'form-control'])}}
        </div>
    </div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection