<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $un = $_POST['un'];
        $fn = $_POST['fn'];
        $fe = $_POST['fe'];
        $fi = $_POST['fi'];
        $fd = $_POST['fd'];
        $fimg = $_FILES['fimg']["name"];

        $db = mysqli_connect('localhost' , 'root' , '' , 'univer');

        $sq = "INSERT INTO `faculty`( `name`, `university`, `expirtise`, `interest`, `image`, `department`)
            VALUES ('$fn' , '$un' , '$fe' , '$fi' , '$fimg' , '$fd' )";
        
        if ($db->query($sq) === true )
        {
            $_SESSION['message'] = 'Successfully Added To DataBase';
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
    <br><br>
    <h1><?php echo $_SESSION['message'];?></h1>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-13">
                <div class="pull-left">
                    <h1>Add new Faculty</h1>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="crud.php">back</a>
                </div>
            </div>
        </div>


        <div class="row">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>University Name:</strong><br>
                <br><input type="text" name="un" class="form-Control">
                </div><br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>Faculty Name:</strong><br>
                <input type="text" name="fn" class="form-Control">
                </div><br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>Faculty Expertise:</strong> <br>
                <input type="text" name="fe" class="form-Control">
                </div><br>
            </div><br>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <br><strong>Faculty Interest:</strong><br>
                <input type="text" name="fi" class="form-Control">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <br><strong>Faculty Department:</strong><br>
                <input type="text" name="fd" class="form-Control">
                </div><br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <br><strong>Faculty Image:</strong><br>
                <input type="file" name="fimg" class="form-Control">
                </div>
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