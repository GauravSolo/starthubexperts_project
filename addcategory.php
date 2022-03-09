<?php
include 'config.php';
session_start();
if(!isset($_SESSION['username']))
{
    header("Location: {$host}");
    exit();
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    <title>ADD POST</title>
  </head>
  <body>


    <div class="container-fluid mb-5" style="min-height:80vh;" >
        <div class="row">
            <div class="col m-0 p-0">
            <nav style="background-image: linear-gradient(to right bottom, #0b107c, #341b9b, #5625bb, #792fdb, #9d39fb);" class="navbar navbar-expand-lg  navbar-light bg-transparent" style="box-shadow: none;">
                                <div class="container-fluid">
                                <a class="navbar-brand position-relative text-start text-sm-end" style="width: 150px" href="index.php"><img src="images2/apurva-01.png"  class="w-75 h-50" alt="logo"></a>
                                <button style="color: transparent !important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                        <li class="nav-item text-center">
                                            <a class="nav-link active  px-4" aria-current="page" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item text-center ">
                                                            <a class="nav-link   px-4" aria-current="page" href="phaseeureka.php">Phase Eureka</a>
                                                        </li>
                                                        <li class="nav-item text-center">
                                                            <a class="nav-link  px-4" href="what-we-do.php">What We Do</a>
                                                        </li>
                                                        <li class="nav-item text-center ">
                                                            <a class="nav-link   px-4" aria-current="page" href="whoweare.php">Who We Are</a>
                                                        </li>
                                                        <?php 
                                                            if(isset($_SESSION['username']) && $_SESSION['role'] == '1')
                                                              {
                                                          ?>
                                                        <li class="nav-item text-center">
                                                          <a class="nav-link  px-4" href="addcategory.php">Add Post</a>
                                                        </li>
                                                        <li class="nav-item text-center">
                                                          <a class="nav-link  px-4" href="showenquiries.php">Show Enquiries</a>
                                                        </li>
                                                        <?php }?>
                                                        <!-- <li class="nav-item text-center">
                                                            <a class="nav-link  px-4" href="#">What We Work</a>
                                                        </li> -->
                                                        <!-- <li class="nav-item">
                                                            <a class="nav-link  d-flex " href="#">Carreer
                    
                                                               <span class="ms-2 badge"> APPLY</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="#">News</a>
                                                        </li> -->
                                                  
                                                        </ul>
                                                        <!-- <div data-toggle="modal" data-target="#modalContactForm" class="text-white text-center p-2 p-sm-3 mx-auto mx-lg-0" style=" cursor: pointer; border-radius: 100px ;width: 200px; background-color: #ffa737; font-weight: bold; font-size: .8rem;"> <a href="#" class="text-white text-decoration-none" >GET IN TOUCH NOW</a></div> -->
                                                        <?php 
                                                            if(isset($_SESSION['username']) && $_SESSION['role'] == '1')
                                                              {
                                                          ?>
                                                        <div class="logout text-white text-center p-2 p-sm-3 mx-auto mx-lg-0" style="margin-top:2px; cursor: pointer; border-radius: 100px ;width: 200px; background-color: #ffa737; font-weight: bold; font-size: .8rem;"> <a href="logout.php" class="text-white text-center text-decoration-none" >LOG OUT</a></div>
                                                        <script>
                                                          document.querySelector('.logout').addEventListener('click',()=>{
                                                            window.location.href = "logout.php";
                                                        });
                                                        </script>
                                                        <?php }?>
                                </div>
                                </div>
                    </nav>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex flex-column justify-content-center align-content-center">
                                <div class="col-md-12 text-center mb-3">
                                    <h1 class="admin-heading" style="border-bottom:1px solid black;">Add New Data</h1>
                                </div>
                                <div class="col-md-6 mt-4 mx-auto">
                                    <!-- Form -->
                                    <form action="" method="post" enctype="multipart/form-data" id="form" style="border:1px solid black;box-shadow: 5px 5px 10px grey, -5px -5px 10px grey;border-radius:10px; min-height:60vh;" class="d-flex p-3 px-sm-5  flex-column justify-content-around">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="para1"> Para1</label>
                                            <textarea name="para1" class="form-control" rows="2"  required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="para2"> Para2</label>
                                            <textarea name="para2" class="form-control" rows="2"  required></textarea>
                                        </div>
                                        <div class="input-group mb-3">
                                         
                                        <input name="image" type="file" class="form-control" id="image">
                                        <label class="input-group-text" for="image">Upload</label>
                                        </div>
                                        <div class="message"></div>
                                        <button type="submit text-center text-info fs-4" value="submit" name="submit" class="btn btn-primary">ADD</button>
                                    </form>
                                    <!--/Form -->
                                </div>
            </div>
        </div>


                                                    </div>
        <div class="row mt-5">
             <div class="col-12 m-0 p-0 " style="background-color: rgba(0, 0, 0, 0.2) ">

<!-- Remove the container if you want to extend the Footer to full width. -->

                        <footer class="bg-light text-center text-white">
                                <!-- Grid container -->
                                <div class="container-fluid d-flex flex-column-reverse flex-sm-row justify-content-between  p-4 pb-0">
                                    <div class="text-center text-dark p-3">
                                        © 2022 Copyright:
                                        <a class="text-dark" href="https://starthubexperts.online/">starthubexperts.onilne</a>
                                    </div>
                                <!-- Section: Social media -->
                                <section class="mb-4">
                                    <!-- Facebook -->
                                    <a
                                    class="btn btn-primary btn-floating m-1"
                                    style="background-color: #3b5998 !important;"
                                    href="#!"
                                    role="button" target="_blank"
                                    ><i class="fab fa-facebook-f"></i
                                    ></a>
                                    
                                    <!-- Twitter -->
                                    <a
                                    class="btn btn-primary btn-floating m-1"
                                    style="background-color: #55acee !important;"
                                    href="#!"
                                    role="button" target="_blank"
                                    ><i class="fab fa-twitter"></i
                                    ></a>
                                    
                                    <!-- Google -->
                                    <a
                                    class="btn btn-primary btn-floating m-1"
                                    style="background-color: #dd4b39 !important;"
                                    href="#!"
                                    role="button" target="_blank"
                                    ><i class="fab fa-google"></i
                                    ></a>
                                    
                                    <!-- Instagram -->
                                    <a
                                    class="btn btn-primary btn-floating m-1"
                                    style="background-color: #ac2bac !important;"
                                    href="https://instagram.com/starthubexperts"
                                    role="button" target="_blank"
                                    ><i class="fab fa-instagram"></i
                                    ></a>
                                    
                                    <!-- Linkedin -->
                                    <a
                                    class="btn btn-primary btn-floating m-1"
                                    style="background-color: #0082ca !important;"
                                    href="#!"
                                    role="button" target="_blank"
                                    ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                    <!-- Github -->
                                    <a
                                    class="btn btn-primary btn-floating m-1"
                                    style="background-color: #333333 !important;"
                                    href="#!"
                                    role="button" target="_blank"
                                    ><i class="fab fa-github"></i
                                    ></a>
                                    </section>
                                <!-- Section: Social media -->
                                </div>
                                <!-- Grid container -->
                            
                                <!-- Copyright -->
                                
                                <!-- Copyright -->
                    </footer>    
  <!-- End of .container -->
            </div>
        </div>

    


    <script src="scripts/addcategory.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>