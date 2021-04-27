@extends ('layouts.header');

@section('content')

    <div class="data">
    @foreach($faculty as $data)
        <form class="home_data">
                <img class="img_data" src="images/{{ $data->image }} " width="200">
                <a href="  {{ URL::to('showFaculty/'.$data->id) }} ">	
                    <p style="color: white; font-size:20px; ">{{ $data->university }}</p> 
                    <p style="color: white; ">{{ $data->name }}</p> 
                </a>
        </form>
    @endforeach; 
    </div>
    <br><br>

@endsection