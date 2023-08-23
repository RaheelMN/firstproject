@extends('layouts.masterlayout')
@section('contents')
    <h2 style="text-align:center">Employee Record</h2>
    @if(isset($record))
    <div style="width: 50%;margin:auto">
        <p>Name: {{$record['name']}}</p>
        <p>Age: {{$record['age']}}</p>
        <p>City: {{$record['city']}}</p>
    </div>
    @endif
@endsection
