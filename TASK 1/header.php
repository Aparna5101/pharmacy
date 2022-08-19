<!DOCTYPE html>
<html lang="en">
<body style="background-color:#fed8b1;" width="400" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
      img {
max-width: 90%;
height: auto;
object-position: center bottom;
}
body
{
  background-image: url("img/logo1.jpg");
  background-repeat:no-repeat;  
  background-position: right 140px;
   
}
        .header{
   background: var(--white);
   position: sticky;
   top:0; left:0; right:0;
   z-index: 1000;
   box-shadow: var(--box-shadow);
}



.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding:0rem;
   margin: 0 auto;
   max-width: 1200px;
   position: relative;
   color:white;
}
.flex img{
left: 100;
}
.header .flex .logo{
   font-size: 50px;
   color:var(--black);
}

.header .flex .logo span{
   color:var(--green);
}
.navbar a{
    text-decoration: none;
}

.header .flex .navbar a{
   margin:0 1rem;
   font-size: 19px;
   color:var(--light-color);
}

.header .flex .navbar a:hover{
   text-decoration: underline;
   color:var(--green);
}

.header .flex .icons > *{
   font-size: 50px;
   color:var(--light-color);
   cursor: pointer;
   margin-left: 1.5rem;
}

.header .flex .icons > *:hover{
   color:var(--green);
}

.header .flex .icons a span,
.header .flex .icons a i{
   color:var(--light-color);
}

.header .flex .icons a:hover span,
.header .flex .icons a:hover i{
   color:var(--green);
}

.header .flex .icons a span{
   font-size: 2rem;
}

#menu-btn{
   display: none;
}

.header .flex .profile{
   position: absolute;
   top:120%; right:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   width: 33rem;
   display: none;
   animation: fadeIn .2s linear;
}

.header .flex .profile.active{
   display: inline-block;
}

.header .flex .profile img{
   height: 15rem;
   width: 15rem;
   margin-bottom: 1rem;
   border-radius: 50%;
   object-fit: cover;
}

.header .flex .profile p{
   padding:.5rem 0;
   font-size: 2rem;
   color:var(--light-color);
}


.update-profile form{
   max-width: 70rem;
   margin: 0 auto;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}
.button {
  background-color: #FFA500; 
  border: none;
  color: white;
  text-align:center;
  text-decoration: none;
  width: 150px;
  height:50px;
  font-size: 8px;
  margin:0 auto;
  cursor: pointer;
}
.h1{
   font-size:80px;
}
.footer{
    padding: 0;
    margin: 0;
    box-sizing:border-box;
}

.footer-container {

background-color: grey; 
padding-bottom: 4rem;
}

.footer {

width: 80%;

height: 40vh;

color: #fff; 
display: flex;

background-color: #grey; 

margin: auto;

Justify-content: center; 

flex-wrap: wrap;
}

.footer-heading{

display: flex;

flex-direction: column;

margin-right: 4rem;
}


.footer-heading h2
{

margin-bottom: 2rem;
}

.footer-heading a
{
color: #fff;
text-decoration: none;
margin-bottom: 0.5rem;
}

.footer-heading a:hover
{
color: red;
transition:0.3s ease-out;
}
    </style>
</head>
<body>
<?php



?>

<header class="header">

   <div class="flex">

      <p>Subscribe to our Newsletters | Read our YOGALife, Articles & Gurugram<span>.</span></p>
      
      <nav class="navbar">
         <a href="Teacher Training.php">|Teacher Training|</a>
         <a href="Yoga Vacation.php">|Yoga Vacation|</a>
         <a href="Ayurveda.php">|Ayurveda|</a>
         <a href="Login.php">|Login|</a>
      </nav>


      <!-- <nav class="navbar">
         <a href="home.php">home</a>
         <a href="shop.php">shop</a>
         <a href="orders.php">orders</a>
         <a href="about.php">about</a>
         <a href="contact.php">contact</a>
      </nav> -->


      <div class="profile">
         
        
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </div>
   <div class="flex">
   <img src="img/logo.png" alt="logo" width="300" height="100">
      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About Us</a>
         <a href="orders.php">Online Yoga</a>
         <a href="work.php">sivananda@Work</a>
         <a href="corses.php">Courses</a>
         <a href="classes.php">Classes</a>
         <a href="workshops.php">Workshops</a>
         <a href="contact.php">Contact</a>
      </nav>

      <div class="profile">
         
        
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
</div>
   
</header>
<br>
</body>
<body>

 <h1 class="woodmart-title-container title wd-fontsize-l wd-underline-colored"><center>SIVANANDA YOGA VEDANTA DWARKA CENTRE</center></h1>

      <div class="wd-text-block reset-last-child text-center">
         <p style="font-size:20px">Founded by Sri Swami Vishnudevananda, disciple of Sri Swami Sivananda of Rishikesh, the International Sivananda Yoga Vedanta Centres organisation with locations around the world is dedicated to the teaching of classical yoga and vedanta to promote physical, mental and spiritual health. The Organisation is recognised internationally as one of the most important and authentic yoga institutions in the world. A global network of Ashrams and City Centres offer teachings on all aspects of yoga and meditation-including our world-renowned teacher training courses-yogic studies including raja yoga and vedanta and sacred culture programmes. Our founder Swami Vishnudevananda synthesised the essence of yoga into five principles that could be easily incorporated into daily life. These comprise the core teachings of the four paths of classical, traditional yoga and make the wisdom of the ancient sages easily accessible to beginner and the more experienced alike.<br></p>

      <p style="font-size:20px"><br>Sivananda Yoga Vedanta Centre Delhi at Dwarka was founded in 2007 and is located in a magnificent five-storey custom-built studio, with beautifully decorated yoga and meditation halls.</center></p></div>
   <div class="button">

<h1><br>KNOW MORE<br></h1>
<br>
</div>
<br><br>
<center><p style="font-size:90px" >The Sivananda Experience</p></center>


<a href="#" class="img"><img width="440" height="400" src="img/logo6.jpg" class="custom-logo" alt="ekhartyoga">
       <a href="#" class="img"><img width="440" height="400" src="img/logo7.jpg" class="custom-logo" alt="ekhartyoga">
       <a href="#" class="img"><img width="440" height="400" src="img/logo8.jpg" class="custom-logo" alt="ekhartyoga">
 
<div id="images">

 <div class="caption"><center><p style="font-size:30px">Yoga Courses     Yoga Classes         Yoga programmes</center></div></a>
 
</div>
<h1 class="woodmart-title-container title wd-fontsize-l wd-underline-colored"><center>Yoga Courses</center></h1>

      <div class="wd-text-block reset-last-child text-center">

         <p style="font-size:20px">Whether you are new to yoga or planning to restart your practice after break or looking to strengthen the foundation of your existing practice, our courses will guide you through every aspect of the journey.<br></p>
        r>
         <h1 class="woodmart-title-container title wd-fontsize-l wd-underline-colored"><center>Yoga Classes</center></h1>
         <div class="wd-text-block reset-last-child text-center">
   
      <p style="font-size:20px">Designed for people who are familiar with hatha yoga practice, our open classes focus on building strength, flexibility and vitality in the body while calming the mind. We also offer special classes for kids, pregnant ladies and senior citizens.<br></p>
      
      <h1 class="woodmart-title-container title wd-fontsize-l wd-underline-colored"><center>Yoga Programmes</center></h1>
      <div class="wd-text-block reset-last-child text-center">
      
      <p style="font-size:20px"> Expand your knowledge of the science of Yoga. From asana and pranayama, to diets and kriya, to vedanta and stress management, our workshops helps you explore new topics as well as dive deeper into special areas of interest.<br></p> <br><br>
      <BR>

<div class="footer">
   <div style="background-color:black;">
    <footer> <center>
<div class="flex-container">
  <div style="flex-grow: 1" style="background-color:green;"><b>SIVANANDA CENTRES IN INDIA</b>
  <p>
Dwarka Centre, Delhi West
Nataraja Centre, Delhi South
Chennai Centre, Tamil Nadu
Trivandrum Centre, Kerala
  </p>


</div>
  <div style="flex-grow: 1"><b><b>FOLLOW US ON</b>
<p><div class="icons">
         <i class="fa-brands fa-instagram"></i>  
         <i class="fa-brands fa-whatsapp"></i>
         <i class="fa-regular fa-youtube"></i>
         <p>instagram| whatsapp| youtube
</div></div>
<div class="flex-container">
  <div style="flex-grow: 1"><b><b>COME,VISIT US</b>
  <p>
PSP Pocket, Sector – 6 ,
Swami Sivananda Marg,
Dwarka, New Delhi, India

Phone: +91.11.43145745

Email: dwarka@sivananda.org
  </p>
</div>
</div>
<div class="footer-email-form">
    
    <h2>Join our newsletter</h>
    
    <input type="email" placeholder="Enter your email address" id="footer-email"> <input type="Submit" placeholder="Sign up" id="footer-email-btn"> 
    </div>
    <hr>
        
        <div class="row text-center"> © 2022. Made with  by Aparna.</div>
        </div>
</footer>
</body>
</html>
</header>
</body>
