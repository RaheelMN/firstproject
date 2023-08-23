@extends('layouts.masterlayout')

@section('contents')

    <h2>Blade Template</h2>
    <p>In laravel html files or php files that contain html code use blade template</p>
    <p>That means file have blade extension. File is interpreted by Blade engine</p>
    <p>To echo string or expression in html use double curly braces {{'hello'.(5+2)}}</p>
    <p>To echo html tags use single curly braces then double nots{!!"<br><b>This is script in echo</b><br>" !!}</p>
    {{-- <p>Using javascript in php code {!!"<script>alert('This is script');</script>" !!}</p> --}}
    @php
        $var = '<b>Bold</b>';
    @endphp
    
    <p>To echo variable in safe mode {{$var}}</p>
    <p>To echo variable in scirpt mode {!!$var!!}</p>

    @php
        $names = ['raheel','mansoor','khan'];
        $ages = [];
    @endphp
    <ul>
        @foreach ($names as $name)
            @if ($loop->odd)
                <li style="background-color:aquamarine;width:150px">{{$loop->iteration." - ".$name}}</li>                
            @else
                <li>{{$loop->iteration." - ".$name}}</li>
            @endif
        @endforeach
    </ul>

    <p>To check condition if array is empty we can use forelse</p>
    @forelse ($ages as $key => $value)
    <p >{{$key." - ".$value}}<p>                   
    @empty
        <p>Array ages is empty</p>
    @endforelse
    <p>To print php statment as it is add @ before statment</p>
    <p>ie @@foreach($names as $key)</p>

    <h3>Templetes</h3>
    <p>To add header,footer and other common sections in file we use include</p>
    <p>In laravel we can use templete which has all common sections</p>
    <p>To add templete to file we use extend command then tempelate name</p>
    <p>Tempelate file has sections that are unique to page. To represent these</p>
    <p>sections yield command and section name is written in template</p>
    <p>To add code to these section in file section command with name is written</p>
    <p>If we add mutliple sections of same name in file blade will only pick first</p>
    <p>section of same name</p>
    <p>In template if we want to dynamically add data to part of section</p>
    <p>then instead of using yeild we use section which end with show command</p>
    <p>In file we use section, then parent command to add all statements in section from</p>
    <p>template then we can use our own statments relevant to page</p>
    <p>If we want to add javascript or css file dynamically in each file then in template</p>
    <p>we use stack command. In files we use push command</p>
    <p>In files mulitple push commands of same name can be used to add different scripts</p>


@endsection