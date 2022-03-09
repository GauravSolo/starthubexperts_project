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
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
    <link rel="stylesheet" href="styles/phaseeureka.css">
    <title>Phase Eureka</title>
    
  </head>
  <body>




  <div class="container-fluid  mb-5" style="min-height:80vh;" >
        <div class="row ">
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
                                            <a class="nav-link   px-4" aria-current="page" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item text-center ">
                                                            <a class="nav-link  active  px-4" aria-current="page" href="phaseeureka.php">Phase Eureka</a>
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
                                                        <div data-toggle="modal" data-target="#modalContactForm" class="text-white text-center p-2 p-sm-3 mx-auto mx-lg-0" style=" cursor: pointer; border-radius: 100px ;width: 200px; background-color: #ffa737; font-weight: bold; font-size: .8rem;"> <a href="#" class="text-white text-decoration-none" >GET IN TOUCH NOW</a></div>
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
        
        <div class="row front">

        </div>
  </div>
<div class="row">
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
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">CONTACT US</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input name="username" type="text" id="form34" class="form-control">
            <label data-error="Please enter name" data-success="" for="form34">Name</label>
          </div>
  
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input name="email" type="text" id="form29" class="form-control ">
            <label data-error="Please enter email" data-success="" for="form29">Email</label>
          </div>
          <div class="md-form mb-5">
            <i class="fas fa-phone prefix grey-text"></i>
            <input name="phone" type="text" id="form28" class="form-control ">
            <label data-error="Please enter phone" data-success="" for="form28">Phone No.</label>
          </div>
  
          <div class="md-form mb-5">
            <i class="fas fa-tag prefix grey-text me-3"></i>
            <!-- <input type="text" id="form32" class="form-control "> -->
            <select name="category" style="width: 92%;margin-left: 36px;border: none;border-bottom: 1px solid lightgrey;" class="form-control grey-text  browser-default custom-select">
              <option class="grey-text" value="" disabled selected>Category</option>
              <option class="text-black" value="1">Digital Marketing</option>
              <option class="text-black" value="2">Patent Filing</option>
              <option class="text-black" value="3">3-D Modelling</option>
              <option class="text-black" value="5">Research and Development</option>
              <option class="text-black" value="6">Proto-typing</option>
              <option class="text-black" value="7">ROC (Registrar of Companies)</option>
              <option class="text-black" value="8">Accounting and Compliance’s</option>
              <option class="text-black" value="9">Website/Application</option>
              <option class="text-black" value="10">Legalities</option>
              <option class="text-black" value="11">Financing</option>
              <option class="text-black" value="12">Recruitment</option>
              <option class="text-black" value="13">Investors</option>
              <option class="text-black" value="14">Cyber Security</option>
              <option class="text-black" value="15">Co-Working Space</option>
            </select>
          </div>
  
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea name="message" type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
            <label data-error="wrong" data-success="right" for="form8">Your message</label>
          </div>
          <p class="error text-danger text-center"></p>
        </div>
        <div  class="modal-footer  d-flex justify-content-center"  >
          <button id="submit" name="submit"  style="background-color: #ffa737" class="btn  text-white ">SUBMIT</button>
          <button data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#centralModalSuccess" type="hidden" class="d-none" id="siblingbutton"></button>
        </div>
      </div>
    </div>
  </div>
        <script src="scripts/phaseeureka.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
  </body>
</html>