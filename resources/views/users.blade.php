@extends('layouts.masterlayout')
@section('title')
    {{'- User'}}
@endsection

@section('contents')
    <h4>Employees Record</h4>

    @isset($data)
        <table>
            <thead>
                <th>Serial No</th>
                <th>Name</th>
                <th>Age</th>
                <th>City</th>
                <th>View Details</th>
            </thead>
            <tbody>
                @foreach ($data as $key=>$value)
                    @if($loop->even)
                        <tr style="background-color: #f7eea0;">
                            <td>{{$loop->iteration}}</td>   
                            <td>{{$value['name']}}</td>
                            <td>{{$value['age']}} </td>
                            <td> {{$value['city']}}</td>
                            <td><a href="{{route('user',['id'=>$key])}}">View</a></td>
                        </tr>                 
                    @else
                        <tr>
                            <td>{{$loop->iteration}}</td>   
                            <td>{{$value['name']}}</td>
                            <td>{{$value['age']}} </td>
                            <td> {{$value['city']}}</td>
                            <td><a href="{{route('user',['id'=>$key])}}">View</a></td>
                        </tr> 
                    @endif
                @endforeach
            </tbody>
        </table>
    @endisset
@endsection

@push('style')
    <link rel="stylesheet" href="/css/style.css">
@endpush