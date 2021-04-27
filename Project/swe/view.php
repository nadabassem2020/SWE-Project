<?php 
    session_start();
    $id = $_GET['id'];
    $user = $_GET['user'];
    $_SESSION['message'] = "";

    $db = mysqli_connect("localhost" , "root" , "" , "univer") or die("didn't connect");
    $sql = "SELECT * FROM faculty where id = $id";
    $result = mysqli_query( $db , $sql );
    $data = mysqli_fetch_assoc($result);

    $sql2 = "SELECT * FROM courses where faculty_id = $id";

    $result = mysqli_query( $db , $sql2 );
    $datas = array();

    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            $datas[] = $row ;
        }
    }


?>
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
                <div class="pull-right">
                    <?php 
                        if ($user == 1)
                            echo '<a class="btn btn-success btn-lg" href="admin/crud.php">back Crud</a>';
                        elseif ($user === "user")
                            echo '<a class="btn btn-success btn-lg" href="results.php">back</a>';
                        else
                            echo 'Welcome';                        
                    ?>                        
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
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['university']?></td>
            <td><?php echo $data['name']?></td>
            <td><img src="images/<?php echo $data['image']?>" height="100px" width="100px"></td>
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
                <td><?php echo $data['expirtise']?></td>
                <td><?php echo $data['department']?></td>
                <td><?php echo $data['interest']?></td>
                </tr>            
            </div>
        </table>

        <br><br>
        <h2 style="color:red;"> Faculty Courses</h2>
        <table>       
            <div class="row">
                <?php foreach ($datas as $key => $data): ?> 
                    <strong>Course : </strong><?php echo $data['c1']?><br>
                    <strong>Course : </strong><?php echo $data['c2']?><br>
                    <strong>Course : </strong><?php echo $data['c3']?><br>
                    <strong>Course : </strong><?php echo $data['c4']?><br>
                    <strong>Course : </strong><?php echo $data['c5']?><br>
                <?php endforeach; ?>
            </div>
        </table>

    </div>  
</body>

</html>
