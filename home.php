<?php
include('connect.php');

?>
<html>
<head>
    <meta charset="UTF-8">
  <title>TubbyScreen</title>
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="shortcut icon" href="img/tubby.ico">
 
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <a href="home.php"><img src="img/tubbyhead2.png"></a>
                    <a href="new_show.php"><button class="btn btn-primary">Add show</button></a>
                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="flex-container">
            <div class="row">
                    <div class="card-columns ">
                        <?php
                            $select = "SELECT * FROM movies";
                            $select_query = mysqli_query($conn,$select);
                            while($row=mysqli_fetch_array($select_query)){ 
                                
                        ?>
                        <div class="card text-white bg-dark mb-3" style="width: 25rem;"  alt="">
                            <img class="card-img-top" <?php echo "<img src='profile/".$row['profileimage']."'>"?> 
                            <div>
                                <a href="edit.php?id=<?php echo $row['id']?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="delete.php?id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['movie']?></h5>
                                <p class="card-text"><?php echo $row['comment']?> </p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                            <div>
                                <button>Success.</button>
                            </div>
                            ....
                            ..
                            ,,
                            <p>loook</p>

                        </div>
                        <?php
                            }?>
                        
                    </div>
                
            </div>
        </div>
    </section>
</body>
</html>