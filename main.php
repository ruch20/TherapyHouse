<?php
session_start();
//require_once('process.php');
$font_family = "'Georgia', sans-serif";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Therapy House</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

        ::-webkit-scrollbar {
  display: none;
}
    body {
      margin: 0;
      box-sizing: border-box;
      scrollbar-width: none;
      -moz-scrollbar-width: none;
      overflow-y: scroll;
    }
    
        /* CSS for header */
        .header {
          display:flex;
          padding:25px 0px ;
          justify-content: space-between;
          align-items: center;
          background-color:  #5a2a69;
        }
    
        .header .logo {
          font-size: 20px;
          font-family:<?php echo $font_family; ?>;
          color: #ffffff;
          text-decoration: none;
          margin-left: 30px;
        }

        .wel h2{
          font-size: 20px;
          font-family:<?php echo $font_family; ?>;
          color: #ffffff;
          margin-left: 550px;
        }
    
        .nav-items {
          display: flex;
          justify-content: space-around;
          align-items: center;
          font-size: 24px;
          margin-right: 20px;
        }
    
        .nav-items a {
          text-decoration: none;
          color: #000;
          padding: 35px 20px;
          font-weight: bold;
        }
    
        /* CSS for main element */
        .intro {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 735px;
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
        }

        /* Cards */

        .u-center-text {
  text-align: center !important;
}

.u-margin-bottom-small {
  margin-bottom: 1.5rem !important;
}

.u-margin-bottom-medium {
  margin-bottom: 4rem !important;
}

.u-margin-top-big {
  margin-top: 5rem !important;
}

body {
  font-family: "Lato", sans-serif;
  font-weight: 400;
  line-height: 1.7;
  color: #fff;
  background-color: #080808;
}

.heading-primary {
  color: #fff;
  text-transform: uppercase;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  margin-bottom: 6rem;
}

.heading-primary--main {
  display: block;
  font-size: 6rem;
  font-weight: 400;
  letter-spacing: 3.5rem;
  -webkit-animation-name: moveInLeft;
          animation-name: moveInLeft;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out;
  /*
        animation-delay: 3s;
        animation-iteration-count: 3;
        */
}

.heading-primary--sub {
  display: block;
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: 1.75rem;
  -webkit-animation: moveInRight 1s ease-out;
          animation: moveInRight 1s ease-out;
}

.heading-secondary {
  font-size: 3.5rem;
  text-transform: uppercase;
  font-weight: 700;
  color: transparent;
  letter-spacing: 0.2rem;
  line-height: 1;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
  color: #eee;
}

.btn, .btn:link, .btn:visited {
  text-transform: uppercase;
  text-decoration: none;
  padding: 1.5rem 4rem;
  display: inline-block;
  border-radius: 0.5rem;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
  position: relative;
  font-size: 1.6rem;
  border: none;
  cursor: pointer;
}

.btn:hover {
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
  -webkit-box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
}

.btn:hover::after {
  -webkit-transform: scaleX(1.4) scaleY(1.6);
          transform: scaleX(1.4) scaleY(1.6);
  opacity: 0;
}

.btn:active, .btn:focus {
  outline: none;
  -webkit-transform: translateY(-1px);
          transform: translateY(-1px);
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}

.btn--white {
  background-color: #fff;
  color: #777;
}

.btn--white::after {
  background-color: #fff;
}

.btn--green {
  background: -webkit-gradient(linear, left top, right top, from(#fc466b), to(#3f5efb));
  background: linear-gradient(to right, #fc466b, #3f5efb);
  color: #fff;
}

.btn--green::after {
  background-color: #55c57a;
}

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

html {
  font-size: 62.5%;
}

body {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.section-plans {
  height: 768px; 
  width: 100%;
  /* background: url('img/home.jpg');
  background-repeat: no-repeat;*/
  padding: 4rem 0 4rem 0; 
}
.video-container video {
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  /*min-width: 100%;
  min-height: 100%; */
  width: 100%;
  height: 1070px;
  z-index: -1;
  object-fit: cover;
  }
.card {
  -webkit-perspective: 150rem;
          perspective: 150rem;
  -moz-perspective: 150rem;
  position: relative;
  height: 52rem;
}

.card__side {
  height: 52rem;
  -webkit-transition: all 0.8s ease;
  transition: all 0.8s ease;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  border-radius: 5px;
  overflow: hidden;
  -webkit-box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
          box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
}

.card__side--front {
  background-color: #fff;
}

.card__side--front-1 {
  background: linear-gradient(-45deg, #f403d1, #64b5f6);
}

.card__side--front-2 {
  background: linear-gradient(-45deg, #f321d7, #ffec61);
}

.card__side--front-3 {
  background: linear-gradient(-45deg, #24ff72, #9a4eff);
}

.card__side--back {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}

.card__side--back-1 {
  background: linear-gradient(-45deg, #64b5f6, #f403d1);
}

.card__side--back-2 {
  background: linear-gradient(-45deg, #ffec61, #f321d7);
}

.card__side--back-3 {
  background: linear-gradient(-45deg, #9a4eff, #24ff72);
}

.card:hover .card__side--front-1,
.card:hover .card__side--front-2,
.card:hover .card__side--front-3 {
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}

.card:hover .card__side--back {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
}

.card__title {
  height: 45rem;
  padding: 4rem 2rem 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  font-family: 'Georgia' sans-serif;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.card__title--1 i {
  font-size: 5rem;
  padding-bottom: 70px;
}

.card__title--2 i {
  font-size: 5rem;
  padding-bottom: 70px;
}

.card__title--3 i {
  font-size: 5rem;
  padding-bottom: 70px;
}

.card__heading {
  font-size: 4.2rem;
  font-weight: 300;
  font-family: Georgia, 'Times New Roman', Times, serif;
  text-transform: uppercase;
  text-align: center;
  color: #fff;
  width: 75%;
}

.card__heading-span {
  padding: 1rem 1.5rem;
  -webkit-box-decoration-break: clone;
  box-decoration-break: clone;
}

.card__details {
  padding: 0 2rem 2rem;
}

.card__details ul {
  list-style: none;
  width: 80%;
  margin: 0 auto;
}

.card__details ul li {
  text-align: center;
  font-size: 1.5rem;
  padding: 1rem;
}

.card__details ul li:not(:last-child) {
  border-bottom: 1px solid #eee;
}

.card__cta {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 90%;
  text-align: center;
}

.card__price-box {
  text-align: center;
  color: #fff;
  margin-bottom: 8rem;
}

.card__price-only {
  font-size: 1.4rem;
  text-transform: uppercase;
}

.card__price-value {
  font-size: 2.5rem;
  font-weight: 100;
  font-family: 'Times New Roman', Times, serif;
}

.row {
  max-width: 114rem;
  margin: 60px auto;
}

.row:not(:last-child) {
  margin-bottom: 5rem;
  margin-top: 5rem;
}

.row::after {
  content: "";
  display: table;
  clear: both;
}

.row [class^="col-"] {
  float: left;
}

.row [class^="col-"]:not(:last-child) {
  margin-right: 6rem;
}

.row .col-1-of-3 {
  width: calc((100% - 2 * 6rem) / 3);
}


        /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #5a2a69;
      padding: 0px 50px;
      height: 130px;
    }

    .footer .copy {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 18px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }

    /* slider css*/
    .sidebar {

  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #8f50a2;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 100px;
  
}
.sidebar h2{
  font-size: 20px;
  font-family:<?php echo $font_family; ?>;
  color: #ffffff;
}

.sidebar a {
  font-size: 20px;
  font-family:<?php echo $font_family; ?>;
  color: #ffffff;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #5a2a69;
}

.log{
  background: none;
  border: none;
  font-size: 20px;
  font-family:<?php echo $font_family; ?>;
  color: #ffffff;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  display: block;
  transition: 0.3s;


}
.log:hover{
  color: #5a2a69;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 30px;
  cursor: pointer;
  background-color: #5a2a69;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #8f50a2;
}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}


    </style>
</head>
<body>
    <header class="header">
      
        <a href="#" class="logo"><h2>THERAPY HOUSE </h2> </a>
        <div class=wel>
        <h2>Welcome <?php 
       
        echo $_SESSION['Uname'];?>!</h2>
        </div>
        

        <!-- <nav class="nav-items">
          <a href="index.php">Register</a>
          <a href="login.php">Login</a>
        </nav> -->
        <!-- slider-->
        <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 
  <a href="feedback.html">FEEDBACK</a>
  <button class="log" onclick="logout()">LOGOUT</button>

<script>
function logout() {
  // Open home.html in a new tab
  window.location.replace("home.html");
 // window.open('', '_self', '');
  // Close the current tab
  window.close();
}
</script>

  
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
      </header>
      <div class="video-container">
      <video src="img/homebg1.mp4" autoplay="autoplay" loop="loop" muted="muted"></video>
    
        <section class="section-plans" id="section-plans">
      
            <div class="row">
              <div class="col-1-of-3">
                <div class="card">
                  <div class="card__side card__side--front-1">
                    <div class="card__title card__title--1">
                    <i class="fa-solid fa-brain"></i>
                      <h4 class="card__heading">Test Your Mind</h4>
                    </div>
      
                   <!--  <div class="card__details">
                      <ul>
                        <li>1 Website</li>
                        <li>50 GB SSD Storage</li>
                        <li>Unmetered Bandwidth</li>
                        <li>Free SSL Certificate</li>
                        <li>1 Included Domain</li>
                        <li>1 Included Domain</li>
                      </ul>
                    </div> -->
                  </div>
                  <div class="card__side card__side--back card__side--back-1">
                    <div class="card__cta">
                      <div class="card__price-box">
                        <p class="card__price-value">Check your mindset</p>
                      </div> 
                      <button class="btn btn--white" onclick="testmind()">TEST</button>
                      <script>
function testmind() {
  // Open home.html in a new tab
  window.open('testmind/quiz.html', '_blank');
 // window.open('', '_self', '');
  // Close the current tab
  window.close();
}
</script>
                      
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col-1-of-3">
                <div class="card">
                  <div class="card__side card__side--front-2">
                    <div class="card__title card__title--2">
                    <i class="fa-solid fa-spa"></i>
                      <h4 class="card__heading">Retreat Your Mind</h4>
                    </div>
      
                    <!-- <div class="card__details">
                      <ul>
                        <li>Includes Basic Package Features</li>
                        <li>Unlimited Websites</li>
                        <li>Unlimited SSD Storage</li>
                        <li>Unlimited Domains</li>
                        <li>Unlimited Parked Domains</li>
                        <li>Unlimited Sub Domains</li>
                      </ul>
                    </div> -->
                  </div>
                  <div class="card__side card__side--back card__side--back-2">
                    <div class="card__cta">
                      <div class="card__price-box">
                        <p class="card__price-value">Relax with ASMR</p>
                      </div> 
                      <button class="btn btn--white" onclick="snake()">PlAY</button>
                      <script>
function snake() {
  // Open home.html in a new tab
  window.open('SnakeGame/snakegame.html', '_blank');
 // window.open('', '_self', '');
  // Close the current tab
  window.close();
}
</script>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col-1-of-3">
                <div class="card">
                  <div class="card__side card__side--front-3">
                    <div class="card__title card__title--3">
                    <i class="fa-solid fa-heart"></i>
                      <h4 class="card__heading">Heal Your Mind</h4>
                    </div>
      
                    <!-- <div class="card__details">
                      <ul>
                        <li>Includes Plus Plan Features</li>
                        <li>High Performance</li>
                        <li>2 Spam Experts</li>
                        <li>Free SSL Certificate</li>
                        <li>Domain Privacy</li>
                        <li>Site Backup - CodeGuard Basic</li>
                      </ul>
                    </div> -->
                  </div>
                  <div class="card__side card__side--back card__side--back-3">
                    <div class="card__cta">
                       <div class="card__price-box">
                        <p class="card__price-value">Increase your thinking ability</p>
                      </div> 
                      <button class="btn btn--white" onclick="num()">PLAY</button>
                      <script>
function num() {
  // Open home.html in a new tab
  window.open('numbergame/numgame1.html', '_blank');
 // window.open('', '_self', '');
  // Close the current tab
  window.close();
}
</script>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
            
          </section>
</div>  
      <footer class="footer">
        <div class="copy">&copy; 2023 Therapy House</div>
        <div class="bottom-links">
          <div class="links">
            <span>More Info</span>
            <a href="#">Contact</a>
          </div>
        </div>
      </footer>
</body>
</html>