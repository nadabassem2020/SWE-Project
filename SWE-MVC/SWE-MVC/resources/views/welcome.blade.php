@extends ('layouts.header');

@section('content')
    <div class="container">
        <h1>Welcome To UniverProject</h1>
        <h3>stream over 100 faculties with one click</h3><br>
        <h4>By joining, you can add colleges, view a list of all
            online universities, as well as make some
            modifications or deletion on them
        </h4><br>
        <a href="{{route('start')}}"><button type="button" class="btn btn-primary btn-lg">List All</button></a>
    </div>

</body>

@endsection()