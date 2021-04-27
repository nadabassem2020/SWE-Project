<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Show Faculty</title>
</head>

<body>

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-13">
                <div class="pull-left">
                    <h2 style="color:red;">Review Faculty</h2>
                </div>
            </div>

        <div class="row">
            <br><table class="table table-condensed" >
            <tr>
                <th width="150px">Faculty ID</th>
                <th width="150px">University Name</th>
                <th width="150px">Faculty Name</th>
                <th width="150px">Faculty logo</th>
            </tr>

            <tr>      
            <td>{{ $faculty->id }}</td>
            <td>{{ $faculty->university }}</td>
            <td>{{ $faculty->name }}</td>
            <td><img src="images/{{ $faculty->image }}" height="100px" width="100px"></td>
            </tr>            
        </div>
        
        <br>
        <table>       
            <div class="row">
                <table class="table table-condensed" >
                <tr>
                    <th width="400px">Faculty Expertise</th>
                    <th width="400px">Faculty Department</th>
                    <th width="400px">Faculty Interest</th>
                </tr>

                <tr>      
                <td>{{$faculty->expirtise}}</td>
                <td>{{$faculty->department}}</td>
                <td>{{$faculty->interest}}</td>
                </tr>            
            </div>
        </table>

        <br><br>
        <h2 style="color:red;"> Faculty Courses</h2>
        <table>       
            <div class="row">
                @foreach ($corses as $data)
                    <strong>Course : </strong> {{ $data->c1 }}<br>
                    <strong>Course : </strong> {{ $data->c2 }}<br>
                    <strong>Course : </strong> {{ $data->c3 }}<br>
                    <strong>Course : </strong> {{ $data->c4 }}<br>
                    <strong>Course : </strong> {{ $data->c5 }}<br>
                @endforeach 
            </div>
        </table>

    </div>  
</body>

</html>
