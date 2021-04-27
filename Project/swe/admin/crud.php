<?php
    session_start();
    if ($_SESSION['user'] != "admin"){
        header("location: Error.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Crud System</title>
</head>

<body>    

    <br><br>
    <div class="container">
    <center><a class="btn btn-success" href="login.php">Logout</a></center>
    <div class="row">
        <div class="col-lg-13">
            <div class="pull-left">
                <h1>List all Fucalties</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="insert.php">Add new Faculty</a>
            </div>
        </div>
    </div>
    <br>

        <?php
            $db = mysqli_connect("localhost" , "root" , "" , "univer") or die("didn't connect");
            $sql = "SELECT * FROM faculty";

            $result = mysqli_query( $db , $sql );
            $datas = array();

            if (mysqli_num_rows($result) > 0)
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    $datas[] = $row ;
                }
            }
        ?>
        <div class="row">

        <br><table class="table table-hover " >
        <tr>
            <th width="150px">Faculty Name</th>
            <th width="150px">Faculty ID</th>
            <th width="150px">Faculty logo</th>
            <th width="150px">Action</th>
        </tr>

        <?php foreach ($datas as $key => $data): ?> 
            <tr>      
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['id']?></td>
            <td><img src="../images/<?php echo $data['image']?>" height="70px" width="70px"></td>
            <td>
                <a class="btn btn-danger" href="../view.php? user=1 & id=<?php echo $data['id']; ?>">show</a>
                <a class="btn btn-danger" href="insertCourse.php? id=<?php echo $data['id']; ?>">Add Courses</a>
                <a class="btn btn-info" href="update.php? id=<?php echo $data['id']; ?>">edit</a>
                <a class="btn btn-primary" href="delete.php? id=<?php echo $data['id']; ?>"
                onclick="return confirm('Are you sure?')">delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </table>
        </div>
    </div>

    </body>
</html>