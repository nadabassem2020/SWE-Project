<?php 
    session_start();

	$db = mysqli_connect('localhost' , 'root' , '' , 'univer');

    $id = $db->real_escape_string($_GET['id']);
    $displayIntro = mysqli_query($db , "DELETE FROM faculty WHERE id = $id" );

    $db->query($displayIntro);

    header("location: crud.php");
?>