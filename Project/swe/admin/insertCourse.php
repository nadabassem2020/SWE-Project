<?php

    session_start();
    $_SESSION['message'] = "";
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_GET['id'];
       
        $c1 = $_POST['un'];
        $c2 = $_POST['fn'];
        $c3 = $_POST['fe'];
        $c4 = $_POST['fi'];
        $c5 = $_POST['fd'];

        $db = mysqli_connect('localhost' , 'root' , '' , 'univer');

        $sq = "INSERT INTO `courses`(`faculty_id`, `id`, `c1`, `c2`, `c3`, `c4`, `c5`) 
        VALUES ($id , NULL , '$c1' , '$c2' , '$c3' , '$c4' , '$c5')";
                     
        if ($db->query($sq) === true )
        {
            $_SESSION['message'] = 'Successfully Added To Faculty';
        }
        else 
        {
            $_SESSION['message'] = "SomeThing Wrong Happend";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Insert</title>
</head>

<body>
    <br>
    <h1><?php echo $_SESSION['message'];?></h1>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-13">
                <div class="pull-left">
                    <h1>Add new Courses</h1>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="crud.php">back</a>
                </div>
            </div>
        </div>


        <div class="row">
            <form action="insertCourse.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <br>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>Course 1:</strong>
                <input type="text" name="un" class="form-Control">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>Course 2:</strong>
                <input type="text" name="fn" class="form-Control">
                </div><br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>Course 3:</strong> 
                <input type="text" name="fe" class="form-Control">
                </div>
            </div><br>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <br><strong>Course 4:</strong>
                <input type="text" name="fi" class="form-Control">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <br><strong>Course 5:</strong>
                <input type="text" name="fd" class="form-Control">
                </div><br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-groub">
                <br><button type="submit" name="submit" class="btn btn-primary"> Insert </button>
                </div>
            </div>
            </form>
        </div>
    </div>
    
</body>
</html>