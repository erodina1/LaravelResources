@extends('/layout.app')

@section('content')
    <h1>customers</h1>
    @foreach ($customers as $customer)
        <a href="/customers/{{$customer->custID}}">{{$customer->firstName}}</a><br>
    @endforeach
@endsection