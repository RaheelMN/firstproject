@extends('layouts.masterlayout')

@section('contents')
    <h2>Javascript in with blade engine</h2>
    <p>To store php variable in js object use json in script</p>
    @php
        $name = 'raheel';
        $fruits = ['apple','banana','orange','mango'];
    @endphp

    <script>
        let name = @json($name);
        console.log(name);
        let fruits = @json($fruits);
        console.log(fruits);
        fruits.forEach(function(e){
            console.log(e);
        });
    </script>
@endsection

@section('title')
    {{' - Test'}}
@endsection

