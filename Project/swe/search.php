<?php 
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $search = $_POST['name'];
        $filter = $_POST['filter'];
        $_SESSION['message'] = "Available Fucalties";

        $db = mysqli_connect("localhost" , "root" , "" , "univer") or die("didn't connect");
        
        if($filter == 'name'){
            $sql = "SELECT * FROM faculty where name like '%$search%'";
        }
        elseif($filter == 'depart'){
            $sql = "SELECT * FROM faculty where department like '%$search%'";
        }
        elseif($filter == 'co-Teach'){

            $sq = "SELECT * FROM courses WHERE c1 LIKE '%$search%' OR c2 LIKE '%$search%' 
            OR c3 LIKE '%$search%' OR c4 LIKE '%$search%' OR c5 LIKE '%$search%'";
            $result = mysqli_query( $db , $sq );
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) > 0){
                $id = $row['faculty_id'];
                $sql = "SELECT * FROM faculty where id ='$id' ";
            }
            else
                $sql = "SELECT * FROM faculty where expirtise like '%$search%'";
        }
        elseif($filter == 'expertise'){
            $sql = "SELECT * FROM faculty where expirtise like '%$search%'";
        }
        elseif($filter == 'Interest'){
            $sql = "SELECT * FROM faculty where interest like '%$search%'";
        }

        $result = mysqli_query( $db , $sql );
        $datas = array();

        if (mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                $datas[] = $row ;
            }
        }
        else {
            $_SESSION['message'] = "No Results Found";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Browse-Search</title>
</head>

<body>
    <?php include 'includes/header.php';?>
    <br><br>
    <center><h1 style="color: white; "><?php echo $_SESSION['message'] ?></h1></center>
    <div class="data">
        <?php foreach ($datas as $key => $data): ?> 
            <form class="home_data">
                    <img class="img_data" src="images/<?php echo $data['image']?>" width="200">
                    <a href="view.php? id=<?php echo $data['id']; ?>">	
                        <p style="color: white; font-size:20px; "><?php echo $data['university'];?></p> 
                        <p style="color: white; "><?php echo $data['name'];?></p> 
                    </a>
            </form>
        <?php endforeach; ?>

    </div>
    <br><br>
    <center>
    <a href="results.php"><button type="submit" class="btn btn-primary btn-lg">Home</button></a>
    </center>


</body>
</html>