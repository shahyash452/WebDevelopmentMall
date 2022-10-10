<?php
  if($_SERVER=['REQUEST_METHOD']=='POST')
  {
      $Email=$_POST['Email'];
      //Connecting to the database
      $servername="localhost";
      $username="root";
      $password="";
      $database="mall";
  }
  $conn=mysqli_connect($servername,$username,$password,$database);
  if(!$conn)
  { 
      die("connection to this database failed due to ".mysqli_connect_error());
  }
  else{
    $sql="INSERT INTO `mall_news` (`Serial No.`, `Email`) VALUES ( '$Email');"  
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Saturn Mall,Shopping,Dining & more</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" media="screen and (max-width:1000px )" href="phone.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Roboto+Mono:wght@100&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Koh+Santepheap:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h3>THE SATURN MALL</h3>
        <i class="fa fa-bars" id="menu"  onclick="showMenu()" aria-hidden="true"></i>
    </header>
    <nav id="navbar">
        <!-- <div id="logo">
            <img src="./Images/logo2.jpg" alt="">
        </div> -->
        <div id="nav-links">
            <ul>
                <i class="fa fa-times" onclick="hideMenu()" aria-hidden="true"></i>
                <li class="item"><a href="index.html">HOME</a></li>
                <li class="item"><a href="#">SHOP</a></li>
                <li class="item"><a href="#">OFFERS</a></li>
                <li class="item"><a href="#">ENTERTAIN</a></li>
                <li class="item"><a href="#">CONTACT</a></li>
            </ul>
        </div>
        <!-- <i class="fa fa-bars" id="menu" onclick="showMenu()" aria-hidden="true"></i> -->
    </nav>
    <section class="main">

        <section class="home">
            <img src="./Images/main.jpg" alt="">
        </section>
        <section class="home">
            <img src="./Images/slider2.jpg" alt="">
        </section>
        <section class="home">
            <img src="./Images/slider3.jpg" alt="">
        </section>
        <section class="home">
            <img src="./Images/slider6.jpg" alt="">
        </section>
        <script>
            let flag = 0;
            slideshow();
            function slideshow() {
                let slides = document.getElementsByClassName('home');
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                flag++;
                if (flag > slides.length) {
                    flag = 1;
                }
                slides[flag - 1].style.display = "block";
                setTimeout(slideshow, 5000);
            }

        </script>
        <div class="main-btn">
            <a href="">Explore More</a>
        </div>
    </section>
    <section id="fashion">
        <div>
            <img src="./Images/shopping_main.jpg" alt="">
        </div>
        <div class="fashion-section">
            <p class="fashion-1">FASHION AVENUE</p>
            <h1 class="fashion_tag">REDIFINING <br>&nbsp; LUXURY</h1>
            <p class="fashion-2">More than 200 of the most covetable <br> luxury brands at Fashion Avenue <br> ready for
                you to discover</p>
            <a href="fashion.html">EXPLORE MORE</a>
        </div>
    </section>
    <section id="electric">
        <div>
            <img src="./Images/electric.jpg" alt="">
        </div>
        <div class="electric-section">
            <p class="electric-1">ELECTRIC AVENUE</p>
            <h1 class="electric_tag">REDIFINING <br> &nbsp; WORLD</h1>
            <p class="electric-2">The most covetable <br> electronics brands at Electric Avenue <br> ready for you to
                discover</p>
            <a href="electric.html">EXPLORE MORE</a>
        </div>
    </section>
    <section id="entertainment">
        <div id="dine">
            <div>
                <img src="./Images/restaurant_main.jpg" alt="">
            </div>
            <div class="btn-1">
                <a href="restaurant.html" class="btn">EXPLORE</a>
                <a href="#" class="btn">VIEW OFFERS</a>
            </div>
        </div>
        <div class="cinema">
            <div>
                <img src="./Images/theatre_main.jpg" alt="">
            </div>
            <div class="btn-1">
                <a href="restaurant.html" class="btn">VISIT US</a>
                <a href="#" class="btn">BOOK NOW</a>
            </div>
        </div>
    </section>
    <div class="text">
        THE SATURN MALL
    </div>
    <!-- Footer -->
    <!-- PHP Code -->
    <!-- INSERT INTO `mall_news` (`Serial No.`, `Email`) VALUES ('1', 'shahyash123@gmail.com'); -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Receive Our Newsletter</h3>
                    <form action="mall.php">
                        <input type="email" name="" id="email" placeholder="Email Address">
                        <input type="submit" value="Submit" id="submit">
                    </form>
                </div>
                <div class="footer-col-2">
                    <img src="./Images/logo2.jpg" alt="">
                    <p>Our purpose is to help people find the <br> mall and to shop at our mall.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <a href="">
                            <li>T & C</li>
                        </a>
                        <a href="">
                            <li>Return Policy</li>
                        </a>
                        <a href="">
                            <li>About US</li>
                        </a>
                        <a href="">
                            <li>Work with Us</li>
                        </a>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <a href="">
                            <li>Instagram </li>
                        </a>
                        <a href="">
                            <li>Facebook</li>
                        </a>
                        <a href="">
                            <li>Twitter</li>
                        </a>
                        <a href="">
                            <li>Youtube</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="center">
            Copyright &copy; www.MyMall.com.All Rights Reserved!
        </div>
    </footer>
    <script>
        var navlinks=document.getElementById("nav-links");
        var navBar=document.getElementById("navbar");
        function showMenu()
        {
            navlinks.style.right="0";
            navbar.style.height="240px";
        }
        function hideMenu()
        {
            navlinks.style.right="-200px";
            navbar.style.height="55px";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>