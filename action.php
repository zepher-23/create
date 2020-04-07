
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>CREATE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://kit.fontawesome.com/78589fc54e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="signup.css">
    
</head>
<body>
  <?php
session_start();

require_once "config.php";



?>

<!--hellooo////////////////////////////////////////-->
<div id="id02" class="mod">
  
  
  <form method="POST" class="modal-cont" action="<?php echo htmlspecialchars("#");?>">
    <div class="modal-header" >
      <h2 >login</h2>
      
      <span  onclick="document.getElementById('id02').style.display='none'" class="clos" title="Close Modal">
    <div>
    <h1 class="x">

    <div class="close1"></div>
    
    <div class="close3"></div>
  
  </h1></div></span>
      </div>
    <div class="form-holder">
      
     
      

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn"><?php echo "hello".$_SESSION["username"]?></button>
      </div>
    </div>
  </form>
</div>
<!--log out////////////////////////////////////////////////////////////////////-->

<div id="id01" class="mod">
  
  
  <form  method="post" class="modal-cont" onsubmit="return checkPass(this)" action="<?php echo htmlspecialchars("logout.php")?>">
    <div class="modal-header" >
      <h2 >log out</h2>
      
      <span  onclick="document.getElementById('id01').style.display='none'" class="clos" title="Close Modal">
    <div>
    <h1 class="x">

    <div class="close1"></div>
    
    <div class="close3"></div>
  
  </h1></div></span>
      </div>
    <div class="form-holder" id="formcont">
    <h1>do you wanna log out?</h1>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit"  class="signupbtn" >log out</button>
      </div>
    </div>
  </form>
</div>

    <nav class="menu-activea">
  
  <h1 class="container"  onclick="myFunction(this)">
    
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  
  </h1>

  
    

  <ul>
    <a href="index.html"><li>HOME</li></a>
   
    
     <div class="dropdown">
       <li class="hover">SERVICES</li>
    <div class="dropcontent">
      <a href="#" id="myBtn1">Graphic & Design</a>
      

      


      <a href="#" id="myBtn6">App Development</a>

      <a href="#" id="myBtn2">Website & Hosting</a>
      <a href="#" id="myBtn3">Digital Marketing</a>
      <a href="#" id="myBtn4">photo & video</a>
      <a href="#" id="myBtn5">3D modelling</a>

    </div> </div>
    <a href="creators.html"><li>CREATORS</li></a>
    <a href="workwithus.html"><li>join the team</li></a>
    <a href="about.html"><li>ABOUT</li></a>
    <a href="talkwithus.html"><li>TALK WITH US!</li></a>

    

   

    
    
    
  </ul>
  <div class="side"></div>
</nav>
 <!-- The Modal -->
      <div id="myModal" class="modal">
      
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">
              <div>
              <h1 class="x">
    
              <div class="close1"></div>
              
              <div class="close3"></div>
            
            </h1></div></span>
            <h2>ORDER DETAILS</h2>
          </div>
          <div class="modal-body">
            <h3></h3>
<!--submit form-->
<div class="contain">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="mail">E-mail</label>
    <input type="text" id="mail" name="email" placeholder="E-mail..">

    <label for="category">Category</label>
    <select id="graphic" name="category">
      <option value="select">SELECT</option>
      <option value="logodesign">Logo Design</option>
      <option value="Flyers">Flyers</option>
      <option value="banner">banner</option>
    </select>
    <select id="web" name="category">
      <option value="select">SELECT</option>
      <option value="logodesign">Portfolio</option>
      <option value="Flyers">Service</option>
      <option value="banner">blog</option>
    </select>
    <select id="marketing" name="category">
      <option value="select">SELECT</option>
      <option value="logodesign">Instagram</option>
      <option value="Flyers">SEO</option>
      <option value="banner">banner</option>
    </select>
    <select id="video" name="category">
      <option value="select">SELECT</option>
      <option value="logodesign">Video Editing</option>
      <option value="Flyers">2D animation</option>
      <option value="banner">After effects & VFX</option>
      <option value="banner">Lightroom/Photoshop</option>
    </select>
    <select id="3d" name="category">
      <option value="select">SELECT</option>
      <option value="logodesign">Product design & animation</option>
      <option value="Flyers">3D Animation</option>
      <option value="banner"></option>
    </select>

    <select id="app" name="category">
      <option value="select">SELECT</option>
      <option value="logodesign">Productivity</option>
      <option value="Flyers">Utility</option>
      <option value="banner">Lifestyle</option>
    </select>
    <label for="slidecontainer">Budget</label>
    <div class="slidecontainer">
      <input type="range" min="600" max="100000" value="50" class="slider" id="myRange">
      <p class="min">Min: &#8377;600</p>
      <p>&#8377; <span id="demo"></span></p>
    </div>


    <label for="desc">Description</label>
    <textarea id="desc" name="desc" placeholder="Describe how you want it..." style="height:100px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

          </div>
          <div class="modal-footer">
            <h3></h3>
          </div>
        </div>
      
      </div >
      <div class="header">
      <div class="logo">CREAT<span class="engine">Engine.</span>
      </div>
      <div class="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log out</div>
      <div class="login"  onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><?php echo "Hello, ".ucfirst($_SESSION["username"])." !"?></div>
    </div>
      
      
<main class="col-12">
  
      
  <section class="image col-12"></section>
  
  <section class="insidemain">
    <!--<div class="write">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi porro, fugit quia maiores velit eligendi blanditiis necessitatibus doloribus magnam rerum fugiat cumque id exercitationem quibusdam doloremque quidem quas minima. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, deserunt! Deleniti ab hic minus error dolor harum neque eaque, aut exercitationem, assumenda mollitia quo dolorem impedit reiciendis unde ad! Dolore!</div>-->
    <section class=steps>
      <div class="stepshead">
        
<h1>This pen is
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "nerdy.", "simple.", "pure JS.", "pretty.", "fun!" ]'></span>
</h1>

      </div>
     
      
    </section>
    <section>
   <h1 class="dev">UNDER DEVELOPEMENT</h1>
<div class="icon1"><i class="fas fa-tools"></i></div>
    <br>
    <p>
    </p>
  </section> 
  <footer>
  <p>
    
  </p>
  <p>
    <small> 
      copyright &copy; 2020, createngine.com | ALL RIghTS RESERVED |<a class="terms" href="#"> privacy policy </a>|
    <a class="terms" href="#">terms and conditions</a><br>
      <a class="contactus" href="#">
        contact us
      </a>
  </small>
    <i class="fab fa-instagram"></i>
  <i class="fab fa-twitter"></i> 
</p>
  

</footer>
</section>

</main>
<script src="script.js"></script>

</body>
</html>




