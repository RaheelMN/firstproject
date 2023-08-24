
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Project @yield('title') </title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> --}}
</head>
<body>
    <header>
        Welcome to First Project of Laravel
    </header>
    <nav>
        <a href="{{route('home')}}">Home</a> 
        <a href="{{route('about')}}">About Us</a>
        <a href="{{route('users')}}">Employees</a>
    </nav>
    <main>
        <article>
            {{-- if page has contents in contect section then yeild else diplay message --}}
            @hasSection('contents')
                @yield('contents')
            @else
                <p>No contents found</p>    
            @endif
        </article>
        <aside>
            {{-- if page add data to sidebar than we use show at end  --}}
            @section('sidebar')
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/users">Employees</a></li>
                <li><a href="{{route('test_name')}}">Testing</a></li>
                <li><a href="/AboutUs">About Us</a></li>
                <li><a href="/blade_template">Blade Template</a></li>
            </ul>
            @show
        </aside>
    </main>
    <footer>
        All right reserved @first project 2023
    </footer>  
</body>
{{-- <script src="/jquery.js"></script> --}}
@stack('script')
</html>
