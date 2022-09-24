
<html>
  <head>
   
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="css/homepage.css"/>
    <script tpye ="text/javascript">
         
           
             function edirect()
             { 
               window.location = "http://localhost/HOtel-plazoo/homepage.php";
             }
             function direct()
             { 
               window.location = "http://localhost/Hotel-plazoo/adminlogin.php";
             }
             function indirect()
             { 
               window.location = "http://localhost/Hotel-plazoo/customerlogin.php";
             }
             function tic()
             { 
               window.location = "Receptionist.php";
             }
             
         
      </script>
  </head>
      
    

<body>
<header>
    <h1>The Palazzo Resort</h1>
</header>
<nav>
   <input type = "button" value = "Home" onclick = "edirect();" />
   <input type = "button" value = "Admin login" onclick = "direct();" />
    
   <!-- <a href="">Admin login</a> -->
   <!--<a href="adminlogin.php"><input type = "button" value = "Admin login"  /></a>-->
   <input type = "button" value = "Customer login" onclick = "indirect();" />
   <input type = "button" value = "Receptionist login" onclick = "tic();" />
</nav>
<main>
      
    <section>
        <h2>Rooms Design</h2>
        <img src="img/room1.webp" alt="img" width="33%" height="49%">
        <img src="img/room2.jpg" alt="img" width="33%">
        <img src="img/room3.jpg" alt="img" width="33%">
        <img src="img/room4.webp" alt="img" width="33%">
        <img src="img/room7.jpg" alt="img" width="33%" height="49%">
        <img src="img/room6.jpg" alt="img" width="33%">
        <br>
        <br>
        <br>
    </section>
    <section>
        <h2>Hotel Reviews</h2>
        <img src="img/review1.png" alt="img" width="100%" height="60%">
        <img src="img/review2.png" alt="img" width="40%" height="34%">
        <img src="img/review3.png" alt="img" width="40%">
    </section>
    
    <section>
        <h2>
            Our Founder
        </h2>
        <img src="img/balsam.jpg" alt="This is Balram Kumar,himanshu ranjan">
        <img src="img/hirmanshu.jpg" alt="This is Balram Kumar,himanshu ranjan">
        <img src="img/hey.jpg" alt="This is Balram Kumar,himanshu ranjan" width="10%" height="20%">
        <h3>  Balram Kumar | Himanshu Ranjan | Abhishek Anand</h3>
        <a href="http://https://www.youtube.com/watch?v=cr2Rrl3vz9I" target="_blank" rel="noopener noreferrer">YouTube</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="https://www.linkedin.com/in/himanshu-ranjan-21604a213" target="_blank" rel="noopener noreferrer">LinkedIn</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="https://www.instagram.com/balram_2ka/" target="_blank" rel="noopener noreferrer">Instagram</a>

        <h4>Young Hotel Manager teams. | Founder of The PLazoo Hotel </h4>
        <h5>A hotel in the heart of everything.You have not lived until you’ve stayed here
Where the world comes to stay.Stay in our world of comfort and style.We live for vacationers and travelers who love a good deal, fun, and adventure
Experience something new every moment</h5>
    </section>
</main>

<footer>
    <a href="#">FAQ</a>
    <a href="#">Contact Us</a>
    <a href="#">Terms of Use</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Refund Policy</a>
    <a href="#">&copy; 2022 | The Plazoo Resort</a>
</footer>
