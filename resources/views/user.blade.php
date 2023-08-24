@extends('layouts.masterlayout')
@section('contents')
    <h2 style="text-align:center">Employee Record</h2>
    @if(isset($records))
        <div style="width: 50%;margin:auto">
            @foreach ($records as $key=>$record )            
                <p>Name: {{$record['name']}}</p>
                <p>Age: {{$record['age']}}</p>
                <p>Email: {{$record['email']}}</p>
                <p>Address: {{$record['address']}}</p>
                <p>Phone: {{$record['phone']}}</p>
                <p>City: {{$record['city']}}</p>      
            @endforeach
        </div>
    @endif
@endsection
