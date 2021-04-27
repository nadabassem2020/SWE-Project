<?php 
    session_start();
    if ($_SESSION['user'] != "admin"){
        header("location: Error.html");
    }
    $id = $_GET['id'];
    $_SESSION['message'] = "";

    $db = mysqli_connect("localhost" , "root" , "" , "univer") or die("didn't connect");
    $sql = "SELECT * FROM faculty where id = $id";

    $result = mysqli_query( $db , $sql );

    $data = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_GET['id'];

        $un = $_POST['un'];
        $fn = $_POST['fn'];
        $fe = $_POST['fe'];
        $fi = $_POST['fi'];
        $fd = $_POST['fd'];
        $fimg = $_FILES['fimg']["name"];

        $sq = "UPDATE `faculty` SET `name`= '$fn' ,`university`='$un',`expirtise`='$fe',
        `interest`='$fi',`image`='$fimg',`department`='$fd' WHERE id = '$id' ";
        
        $result = mysqli_query($db , $sq);
        header("location: crud.php");
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
                    <h1>Update Faculty</h1>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="crud.php">back</a>
                </div>
            </div>
        </div>


        <div class="row">
            <form action="update.php? id=<?php echo $data['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>University Name:</strong><br>
                <br><input type="text" name="un" class="form-Control" value=<?php echo $data['university'] ;?>>
                </div><br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>Faculty Name:</strong><br>
                <input type="text" name="fn" class="form-Control"  value=<?php echo $data['name'] ;?>>
                </div><br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>Faculty Expertise:</strong> <br>
                <input type="text" name="fe" class="form-Control"  value=<?php echo $data['expirtise'] ;?>>
                </div><br>
            </div><br>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <br><strong>Faculty Interest:</strong><br>
                <input type="text" name="fi" class="form-Control"  value=<?php echo $data['interest'] ;?>>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <br><strong>Faculty Department:</strong><br>
                <input type="text" name="fd" class="form-Control"  value=<?php echo $data['department'] ;?>>
                </div><br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-groub">
                <strong>old image : </strong> <img src="../images/<?php echo $data['image']?>" width ="100px" height="100px">
                <br><strong>Faculty Image:</strong><br>
                <input type="file" name="fimg" class="form-Control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-groub">
                <br><button type="submit" name="submit" class="btn btn-primary"> Update </button>
                </div>
            </div>
            </form>
        </div>
    </div>
    
</body>
</html>