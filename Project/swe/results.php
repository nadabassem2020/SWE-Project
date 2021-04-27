<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Browse</title>
</head>

<body>
    <?php include 'includes/header.php';?>
	<!--Show Data in Page-->
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

    <div class="data">
        <?php foreach ($datas as $key => $data): ?> 
            <form class="home_data">
                    <img class="img_data" src="images/<?php echo $data['image']?>" width="200">
                    <a href="view.php? user=user&id=<?php echo $data['id']; ?>">	
                        <p style="color: white; font-size:20px; "><?php echo $data['university'];?></p> 
                        <p style="color: white; "><?php echo $data['name'];?></p> 
                    </a>
            </form>
        <?php endforeach; ?>

    </div>
    <br><br>
</body>
</html>