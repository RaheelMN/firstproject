@extends('layouts.masterlayout')
@section('title')
    {{'- User'}}
@endsection

@section('contents')
    <h4 class='text_center'>Employees Record</h4>

    @isset($data)
        <table class="table table-bordered table-striped">
            <thead>
                <th class='table_col_left'>Serial No</th>
                <th class='table_col_left'>Name</th>
                <th class='table_col_left'>Email</th>
                <th class='table_col_left'>Phone</th>
                <th>City</th>
                <th>View Details</th>
            </thead>
            <tbody>
                @foreach ($data as $key=>$value)
                    @if($loop->even) 
                         <tr style="background-color: #f7eea0;">
                            <td >{{$loop->iteration}}</td>   
                            <td class='table_col_left'>{{$value['name']}}</td>
                            <td class='table_col_left'>{{$value['email']}}</td>
                            <td class='table_col_left'>{{$value['phone']}}</td>
                            <td> {{$value['city']}}</td>
                            <td><a href="{{route('user',['id'=>$value['st_id']])}}">View</a></td>
                        </tr>                 
                    @else
                        <tr>
                            <td >{{$loop->iteration}}</td>   
                            <td class='table_col_left'>{{$value['name']}}</td>
                            <td class='table_col_left'>{{$value['email']}}</td>
                            <td class='table_col_left'>{{$value['phone']}}</td>
                            <td> {{$value['city']}}</td>
                            <td><a href="{{route('user',['id'=>$value['st_id']])}}">View</a></td>
                        </tr> 
                    @endif
                @endforeach
            </tbody>
        </table>
    @endisset
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="/css/style.css">
@endpush --}}