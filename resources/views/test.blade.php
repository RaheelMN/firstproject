@extends('layouts.masterlayout')

@section('contents')
    <h2>testing route</h2>
    <p>my url is {{$_SERVER['APP_URL'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI']}} </p>
@endsection

@section('title')
    {{' - Test'}}
@endsection

