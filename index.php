<?php
  include 'config.php';

  $sql = "SELECT * FROM sitedata";

  $result = mysqli_query($conn,$sql);

  if($result)
  {
    if(mysqli_num_rows($result) > 0)
    {
      $row = mysqli_fetch_assoc($result);
    }
  }

  session_start();
    


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>START HUB EXPERTS</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./botui/build/botui.min.css" />
    <link rel="stylesheet" href="./botui/build/botui-theme-default.css" />
    <link rel="stylesheet" href="styles/botui.css">

  </head>
  <body>

    <div class="container-fluid position-relative ">
        <div class="row mainrow front d-flex flex-row">
            <div class="col-12">
                    <nav class="navbar navbar-expand-lg  navbar-light bg-transparent" style="box-shadow: none;">
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
            <div class="col-12 frontrow overflow-hidden">
                <div class="row h-100 d-flex flex-column-reverse flex-sm-row justify-content-center " >
                    <div class="col-sm-5 d-flex align-items-center" >
                        <div class="row d-flex" style="flex-direction: row;">
                            <div class="col-12 col-sm-10 d-flex flex-column text-center text-sm-start" style="padding: 0px 20px;margin-bottom: 15%;">
                                <h1 class="text-white heading">
                                    Start Hub Experts
                                </h1>
                                <h4 class="text-white"> Think | Build | Explore | Release </h4>
                                <p class="pt-3 text-white ">
                                    When you can have time to focus on A big picture why to waste time on small things?
                                </p>
                                <div class="row mt-5">
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="button text-white fs-5 d-flex justify-content-center align-items-center" style="background-color: #ffa737;border-radius: 100px;height: 130%; width: 40% ;"><a class="text-decoration-none text-white" href="whoweare.php">KNOW MORE</a></div>
                                        <div data-toggle="modal" data-target="#modalLoginForm" class="pop button text-white fs-5 d-flex justify-content-center align-items-center" style="background-color: rgb(84 110 237);border-radius: 100px;height: 130%; width: 40% ;">CONTACT US</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-10 p-0 m-0">
                                <div class="row d-flex justify-content-evenly m-0 w-100">
                                  <div class="col-lg-4 col-6 text-center count">
                                    <div>
                                      <h1 id="Tusers" class=" display-4 fw-500 count-up text-yellow" data-from="0" data-to="34" data-time="2000"><?php echo $row['Tusers'];?></h1>
                                    </div>
                                    <h5 style="width: 182px; margin-left: auto; margin-right: auto;" class="text-white">Clients Associated With Us</h5>
                                  </div>
                                  <!-- <div class="col-lg-4 col-sm-4 text-center count">
                                    <div>
                                      <h1 class="mb-0  display-4 fw-500 count1 text-yellow" data-from="0" data-to="59" data-time="2000">59</h1>
                                    </div>
                                    <p>Home Sellers</p>
                                  </div> -->
                                  <div class="col-lg-4 col-6 text-center count">
                                    <div>
                                      <h1 id="Tenquiries" class=" count2 display-4 fw-500 text-yellow" data-from="0" data-to="22" data-time="2000"><?php echo $row['Tenquiries'];?></h1>
                                    </div>
                                    <h5 style="width: 182px; margin-left: auto; margin-right: auto;"  class="text-white">Total Enquiries Received</h3>
                                  </div>
                                </div>
                              
                            </div>
                        </div>

                       
  

                          
                          
                                
                          
                             
                           
            

                    </div>
                    <div class="col-12 col-sm-6 text-center d-sm-inline-block position-relative">
                        <img src="images/croped-removebg-preview.png" style="width: 90%;" alt="">
                        
                        
                    </div>
                </div>
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
  


    <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
          <div class="modal-dialog modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content">
              <!--Header-->
              <div style="background-color: #ffa737 !important;"  class="modal-header">
                <p class="heading lead font-weight-bold">START HUB EXPERTS</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
                </button>
              </div>

              <!--Body-->
              <div class="modal-body">
                <div class="text-center">
                  <!-- <i style="color: #ffa737 !important;" class="fas fa-check fa-4x mb-3 animated rotateIn"></i> -->
                  <img src="images2/handshake-32.gif" style="width:100%;" alt="">
                  <p>Thanks for contacting us</p>
                </div>
              </div>

              <!--Footer-->
              <div class="modal-footer justify-content-center" >
                <a style="color: white !important;background-color: #ffa737 !important;" type="button" class="btn  waves-effect" data-dismiss="modal">thanks</a>
              </div>
            </div>
            <!--/.Content-->
          </div>
    </div>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">CONTACT US</h4>
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                <div class="md-form mb-5">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input disabled value="starthubexperts@gmail.com" type="email" id="defaultForm-email" class="form-control">
                
                </div>

                <div class="md-form mb-4">
                  <!-- <i class="fas fa-lock prefix grey-text"></i>
                  <input type="text" id="defaultForm-pass" class="form-control validate"> -->
                  <section class="mb-4 text-center">
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
                
                </div>

              </div>
            </div>
          </div>
    </div>




<!-- <div class="counter">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="employees">
                  <p class="counter-count">879</p>
                  <p class="employee-p">Employee</p>
              </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
              <div class="customer">
                  <p class="counter-count">954</p>
                  <p class="customer-p">Customer</p>
              </div>
          </div>
      </div>
  </div>
</div> -->
<!-- <div class="row bot">
  <div class="col">
  <iframe src="iframe.html" frameborder="0">
  </iframe>
  </div>
</div> -->


<div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
		    <i class="fas fa-headset chaticon"></i>
	</div>
  
  <div class="chat-box">
      <div class="chat-box-header">
        ChatBot
        <span class="chat-box-toggle"><i class="fas fa-times"></i></span>
      </div>
    <div class="chat-box-body">
        <div class="chat-box-overlay">   
            <div id="my-botui-app" id="hello-world">
              <bot-ui></bot-ui>
            </div>
        </div>
        <div class="chat-logs">
        
        </div>
    </div>
    <!-- <div class="chat-input">      
      <form>
        <input type="text" id="chat-input" placeholder="Send a message..."/>
      <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
      </form>      
    </div> -->
</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts/home.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
    <script src="scripts/boui.js"></script>

    <script src="https://cdn.jsdelivr.net/vue/latest/vue.min.js"></script>
    <script src="./botui/build/botui.js"></script>


    <script type="text/javascript">

        var botui = new BotUI('my-botui-app');

         botui.message.bot({
                  content: 'Hi there! 👋',
                  loading: true,
                  delay: 3000,
              }).then(function () {
                  return botui.message.bot({
                      loading: true,
                      delay: 1500,
                      content: "I'm ChatBot",
                  });
              }).then(function () {
                  return botui.message.bot({
                      loading: true,
                      delay: 1500,
                      content: "So i wanted to show something.",
                  });
              }).then(function () {
                  return botui.message.bot({
                      loading: true,
                      delay: 1500,
                      content: "[BotUI](http://docs.botui.org/)",
                  });
              }).then(function () {
                  return botui.message.bot({
                      loading: true,
                      delay: 1500,
                      content: "Pretty cool",
                  });
              }).then(function () {
                return botui.action.button({
                      delay: 1500,
                      loading: true,
                      addMessage: true,
                      action: [{
                          text: 'Yes!',
                          value: 'yes'
                      }, {
                          text: 'No.',
                          value: 'no'
                      }]
                  })
              }).then(function (res) {
                if (res.value == 'yes') {

                  return botui.message.bot({
                              loading: true,
                              delay: 1500,
                              content: "I quite agree!",
                          });
                } else {

                  return botui.message.bot({
                              loading: true,
                              delay: 1500,
                              content: "Okay, I'm sorry ...",
                          });
                }
              }).then(function () {
                return botui.message.bot({
                              loading: true,
                              delay: 1500,
                              content: "Bye, I need to go know.",
                          });
              })  
  </script>
  </body>
</html>