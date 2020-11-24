<?php
session_start();
include('connect.php');

$msg = " ";
$css_class = " ";

if(isset($_POST['create'])) {

    $movie = $_POST['movie'];
    $genre = $_POST['genre'];
    $comment = $_POST['comment'];
    $profileimagename = time() . '_'. $_FILES['profileimage']['name'];

    $target = 'profile/' . $profileimagename;

    if (move_uploaded_file($_FILES['profileimage']['tmp_name'], $target)) {
        $sql = "INSERT INTO movies (profileimage,movie,genre,comment)VALUES('$profileimagename','$movie','$genre','$comment')";
        if(mysqli_query($conn,$sql)){
            $msg = "Success";
            $css_class = "alert-success";
            header( "refresh:2;url=home.php" );
        }else{
            $msg = "Error";
            $css_class = "alert-danger";
            header( "refresh:4;url=new_show.php" );
        }
        $msg = "Success";
        $css_class = "alert-success";
    }else{
        $msg = "Failed to add show";
        $css_class = "alert-danger";
    }
}
?>