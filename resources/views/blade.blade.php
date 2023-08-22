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

@endsection