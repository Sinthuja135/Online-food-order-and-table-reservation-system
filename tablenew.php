  <?php 
  session_start();
  //var_dump($_SESSION['cus_id']);exit();
  if(!isset($_SESSION['cus_id'])){
    header("location:./login.php");
  }
  ?>
  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
  <link rel="stylesheet" href="css/w3school.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <title>Dulsara Restaurant</title>
      <script>
  var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
  </script>

      <style type="text/css">
        [class*="col-"] {
      float: left;
      
  }
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}



  .col-9{

  background-image: url(bg_bot_img.jpg), url(bg_bot_img.gif);
      

  }

  body{
   ddbackground-image: url(Images/bg_slider.jpg);
    background-color:#D8D9D***B;




  }

  </style>


    </head>
    <body>
      

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
      <style> 
  @font-face {
      font-family: navfont;
      src: url(fonts/BreeSerif-Regular.otf);
      
  }
  @font-face {
      font-family:domine;
      src: url(fonts/Domine-Regular.ttf);
  }

  .navbar-brand{
    padding-left: 30px;

  }

  .navcontent {
      font-family:navfont;

  }
  .navbar-login {
    color: #319E82;
    font-size:20px;
  }
  .carousel-item-active {
    width: auto;
    height: auto;
  }
  .Greatfood,.dulasarastoryhead {
    font-family:domine;
    font-size:33.4pt;
    text-align: center;
  }
  .cont{
    text-align:center;
  }
  .GreatfoodCont {
    text-align:justify-all;
    font-family:Verdana;
  }
  .bodygreatfood,.dulasarastory {
    padding-right:270px;
    padding-left: 270px;
    padding-top: 100px;
  }

  .Reservetable,.Aboutus {
    text-align:center;
    padding-top: 30px;
  }
  .mybutton{
    background-color:#319E82;
    font-size:30px;
    color:white;
    border-radius:12px;

  }
  .col2 {
    padding-left: 120px;
  }

  .col3 {
    padding-left: 120px;
  }
  .col4 {
    padding-left: 120px;
    color:White;
  }
  .icons {
    align-items: center;
  }
  #footer {
    color: White;
    font-size:17px;
  }

.mySlides {display:;}



  </style>
      

            <!--nav bar -->
                  <nav class="navbar navbar-light" style="background-color:#16242D;">
                    <!-- Navbar content -->
                      <div class="container" style="font-family:navfont; font-color:White;">
                        <img src="Images/logo.png" alt="Dulsara logo">
                          <div id="navcontent">
                            <a class="navbar-brand" style="color:White;" href="home.php">Home</a>
                            <a class="navbar-brand" style="color:White;" href="./orderhere/ordernow.php">Order Now</a>
                            <a class="navbar-brand" style="color:White;" href="tablenew.php">Reserve Tables</a>
                            <a class="navbar-brand" style="color:White;"href="AboutUs.php"> About Us</a>
                            
                            <?php  if (isset($_SESSION['cus_id'])) {
                               $row= $_SESSION['cus_fname'];}  ?>
                                <img src="Images/user.png" style="padding-top:5px;margin-left:150px;">
                             <select name="forma" onchange="location=this.value;">
                            <option value=""> <a class="navbar-brand" href=" " style="color:Red;margin-left:150px;"><?php echo $row; ?></a></option>
                            <option value="logout.php"> <a class="navbar-brand"  style="color:Red;margin-left:150px;">logout</a></option>
                            
                              </select>
                             
                          </div>
                      </div>
                  </nav>


                  

  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="section-title">
          <div class="heading" style="color:green; font-size:65px;" align="center">Reserve your Table</div>

           <div class="line" align="center">

       <p style="font-size:25px;"><b>It is difficult to manage large amount of people at the same time.</b> </br><i>So Reserve Your Tables By Using This Page.....</i></p>

       </div> 
      </div>


              <div class="reservation-form-holder">
                  <div class="reservation-form" align: center>

                  <form method="POST" action="includes/reserve.inc.php">
                    
                          <div class="row">
                            <div class="col-md-12">
                              <div class="col-md-6">




                                <h3>Reserve Date:</h3>
                                 <!-- date-->

                                  <input type="date" name="date" min="2019-02-01" max="2020-12-31" class="form-control cus_form" required="required" placeholder="Select Your date" /><br>

                                  <h3>Time:</h3>
                                  <select class="form-control cus_form" name="time" required="required">
                                      <option value="">Select Your Time</option>
                                      <option value="9-11">9AM-11AM</option>
                                      <option value="12-2">12PM-2PM</option>
                                      <option value="3-5">3PM-5PM</option>
                                  </select><br>


                                  <!--person-->
                                  <h3>No Of People:</h3>
                                  <select class="form-control cus_form" name="members" required="required">
                                      <option value="">Select Your Table</option>
                                      <option value="SV6C1">Street view 10 Chairs table 1</option>
                                      <option value="SV6C2">Street view 15 Chairs table 2</option>
                                      <option value="">15-20</option>
                                      <option value="2">20-25</option>
                                      <option value="3">25-30</option>
                                      <option value="4">30-35</option>
                                      <option value="5">35-40</option>
                                  </select><br>




                                  <button type="submit" name="reserve" class="cus_form_btn" style="border-radius: 8px; background-color: green; font-size: 25px; color: white; margin-left: 320px; font-weight: bold;">Reserve</button>
                                  <button type="reset" name="cancel" class="cus_form_btn" style="align-left; border-radius: 8px; font-weight: bold; background-color: green; font-size: 25px; color: white;">Clear</button> <br>
                                  <br>
                                  <br>
                          
                </div>
                          <div class="w3-content w3-section col-md-6" style="max-width:500px">
  <img class="mySlides w3-animate-top" src="Images/img10.jpg" style="width:100%">
  
  
</div>

                          </form>
                               </div>
</div>
                               
</div>
                  </div>


                
              
          </div>

            </div>
              </div>


                 <!-- Footer -->

  <div id="footer">

      <nav class="navbar navbar-dark bg-dark" style="padding-top: 30px;">  <!--nav bar -->
    <!-- Navbar content -->
     <div class="container">

   
    <div class="row">
      <div class="col1">
        <img src="Images/logo.png" alt="Dulsara Logo"></br></br>
     
              

      </div>
       <div class="col2">
          
               Dulsara Restaurant
              
              <address> No. 26, Cocowatte Road,</br>Badulla</address> 
              

            

      </div>
      <div class="col3">
          
            
             055 222 8215 <br>
              Coordinate<br> <a href="https://www.google.com/maps/place/6.9853025,81.058579" target="_blank" style="color:white;"> 6.9853025, 81.058579</a>
         
              
             

      </div>

      <div class="col4">
          
            
              <p class="icons">
                <a href="#" class="normaltip" title="Facebook"><img src="Images/icon1.gif" alt=""></a>
                
                <a href="#" class="normaltip" title="Twitter"><img src="Images/icon3.gif" alt=""></a>
                
                
              </p>
            
         
              
              
              weekday      7:30 AM – 10:30 PM <br>
              weekend    7:30 AM – 10:30 PM

      </div>


    </div>
  </div>
    
  </div>
  </nav>

  </div>



   
    </body>
  </html>