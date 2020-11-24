<?php

include('create_show.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

  <title>TubbyScreen</title>
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
  <link rel="stylesheet" href="css/style2.css" type="text/css">

  <link rel="shortcut icon" href="img/tubby.ico">
 
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </header>
        <section class="main">
            <div class="col-4 offset-md-4 form-div">
                <div class="form-group text-center">
                    <a href="home.php"><img src="img/tubbyhead.png"></a>
                    <form action="new_show.php" method="POST" enctype="multipart/form-data">
                        
                        <?php if(!empty($msg)): ?>
                            <div class="alert <?php echo $css_class; ?>">
                                <?php echo $msg; ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <img src="profile/placeholder.png" onclick="triggerClick()" id="profileDisplay" />
                            
                            <input type="file"  name="profileimage" onchange="displayimage(this)" id="profileimage" style="display: none;" required>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Movie" name="movie" id="movie" value="" required>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Movie Genre" name="genre" id="movie" value="" required>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Any comment in mind" name="comment" id="comment" value="" required>
                        </div>

                        <input class="btn btn-primary" type="submit" name="create" value="Add show">
                        
                    </form>
                    <a href="home.php"><button class="btn btn-danger">Cancel</button></a>
                </div>
            </div>
        </section>
    </div>

    <script src="css/script.js"></script>

</body>


</html>
