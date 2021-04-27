<head>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=" {{asset('css/master.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="header">
        <div class="logo">            
            <h3>UniverProject</h3>
        </div>
        <div class="search">
            <div class="search-bar">
                <form action="search.php" method="post">
                    <div class="filter">
                        Search by
                        <select name="filter" id="filters" class="form-control form-control-sm">
                            <option value="name">Name</option>
                            <option value="depart">Department</option>
                            <option value="co-Teach">Course Teach</option>
                            <option value="expertise">Expertise Area</option>
                            <option value="Interest">Professional Interest</option>
                        </select>
                    </div><br>
                    <div class="search-field">
                        <input type="text" name="name" class="form-control form-control-sm" placeholder="Search for" required>
                        <br><button type="submit" class="btn btn-primary btn-sm">Search</button><br><br>
                    </div>
                </form>
            </div>       
        </div>
    </div> 
    @yield('content');

</body>
